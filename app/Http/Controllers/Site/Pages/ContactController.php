<?php

namespace App\Http\Controllers\Site\Pages;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contact\Contact;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepo;
use App\Http\Requests\Contact\StoreRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ProductInquiryNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    protected $modelName = 'Contact';
    protected $routeName = 'contacts.index';
    protected $isDestroyingAllowed;
    protected $model;
    protected $repo;

    public function __construct(Contact $model, ContactRepo $repo)
    {
        $this->model = $model;
        $this->repo = $repo;
        $this->isDestroyingAllowed = true;
    }

    public function index()
    {
        DetectsUserEnvironment("Contact", 'View');
        return view('site.contact.index');
    }


    public function image()
    {
        $text = generateCaptchaText();

        $width = 180;
        $height = 58;

        $image = imagecreatetruecolor($width, $height);

        $bg = imagecolorallocate($image, 245, 247, 250);
        $textColor = imagecolorallocate($image, 40, 40, 40);

        imagefilledrectangle($image, 0, 0, $width, $height, $bg);

        // Noise
        for ($i = 0; $i < 100; $i++) {
            $noiseColor = imagecolorallocate(
                $image,
                rand(150, 200),
                rand(150, 200),
                rand(150, 200)
            );
            imagesetpixel($image, rand(0, $width), rand(0, $height), $noiseColor);
        }

        // 🔤 Font settings
        // $fontPath = public_path('assets/fonts/Roboto-Bold.ttf');
        $fontPath = public_path('assets/fonts/hkgrotesk-bold.ttf');

        // $fontPath = public_path('fonts/hkgrotesk-bold.ttf');
        $fontSize = 26;
        $angle = rand(-5, 5);

        // 📏 Get text box size
        $bbox = imagettfbbox($fontSize, $angle, $fontPath, $text);
        $textWidth  = $bbox[2] - $bbox[0];
        $textHeight = $bbox[1] - $bbox[7];

        // 🎯 Center text based on text width & height
        $x = ($width - $textWidth) / 2;
        $y = ($height + $textHeight) / 2;

        // ✍️ Draw text
        imagettftext($image, $fontSize, $angle, $x, $y, $textColor, $fontPath, $text);


        // Output
        ob_start();
        imagepng($image);
        $imageData = ob_get_clean();
        imagedestroy($image);


        return new Response($imageData, 200, [
            'Content-Type' => 'image/png',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
        ]);
    }

    public function store(StoreRequest $request)
    {
        try {
            $data = $request->validated();

            // ✅ File-based log
            Log::channel('contact')->info(
                "New contact inquiry\n" . json_encode([
                    'fname'       => $data['fname'],
                    'lname'       => $data['lname'] ?? null,
                    'email'       => $data['email'],
                    'phone'       => $data['phone'] ?? null,
                    'subject'     => $data['subject'],
                    'ip'          => $request->ip(),
                    'user_agent'  => $request->userAgent(),
                    'created_at'  => now()->toDateTimeString(),
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
            );


            // ✅ Email notifications
            Notification::route('mail', 'm.fahath@mirnah.com')
                ->notify(new ProductInquiryNotification($data));

            Notification::route('mail', 'ariffakil@gmail.com')
                ->notify(new ProductInquiryNotification($data));

            return $this->response(
                'Your message delivered successfully. We will get back to you shortly',
                ['data' => []],
                true
            );
        } catch (\Throwable $th) {

            Log::channel('contact')->error('Contact inquiry failed', [
                'error' => $th->getMessage(),
            ]);

            return $this->response($th->getMessage(), null, false);
        }
    }

    public function imageWithoutFont()
    {
        // $text = generateCaptchaText();

        // $width = 180;
        // $height = 60;

        // $image = imagecreatetruecolor($width, $height);

        // $bg = imagecolorallocate($image, 245, 247, 250);
        // $textColor = imagecolorallocate($image, 40, 40, 40);

        // imagefilledrectangle($image, 0, 0, $width, $height, $bg);

        // // Noise
        // for ($i = 0; $i < 100; $i++) {
        //     $noiseColor = imagecolorallocate($image, rand(150, 200), rand(150, 200), rand(150, 200));
        //     imagesetpixel($image, rand(0, $width), rand(0, $height), $noiseColor);
        // }

        // imagestring($image, 5, 35, 20, $text, $textColor);

        // ob_start();
        // imagepng($image);
        // $imageData = ob_get_clean();


        // // return response()->file($imageData);

        // return new Response($imageData, 200, [
        //     'Content-Type' => 'image/png',
        //     'Cache-Control' => 'no-cache, no-store, must-revalidate',
        // ]);



        // Mail::raw('Test mail from Laravel', function ($msg) {
        //     $msg->to('m.fahath@mirnah.com')
        //         ->subject('Laravel SMTP Test');
        // });

        // return 'Mail sent';
    }
}
