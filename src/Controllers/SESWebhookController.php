<?php

namespace Megaverse\LaravelSesManager\Controllers;

use Megaverse\LaravelSesManager\Contracts\SESMessageValidatorContract;
use Megaverse\LaravelSesManager\Jobs\HandleSESBounce;
use Megaverse\LaravelSesManager\Jobs\HandleSESComplaint;
use Megaverse\LaravelSesManager\SESConfirmWebhookMiddleware;
use Megaverse\LaravelSesManager\SESMessageValidator;
use Megaverse\LaravelSesManager\Exceptions\WrongWebhookRouting;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;

class SESWebhookController extends Controller
{
    use DispatchesJobs;

    public function __construct()
    {
        $this->middleware(SESConfirmWebhookMiddleware::class);
    }

    /**
     * @return string
     * @throws WrongWebhookRouting
     */
    public function bounce(SESMessageValidatorContract $SESMessageValidator)
    {
        $message = $SESMessageValidator->getMessage();

        $this->dispatchNow(new HandleSESBounce($message));

        return new Response('handled', 200);
    }

    /**
     * @throws WrongWebhookRouting
     */
    public function complaint(SESMessageValidatorContract $SESMessageValidator)
    {
        $message = $SESMessageValidator->getMessage();

        $this->dispatchNow(new HandleSESComplaint($message));

        return new Response('handled', 200);
    }
}
