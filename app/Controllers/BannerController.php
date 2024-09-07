<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\ResponseInterface;

class BannerController extends ResourceController
{
    public function index()
    {
        // API URL
        $url = "https://prahwa.net/api/banners";

        // API Key
        $apiKey = 'OvauuzVrAfGJtWQoksw70zJDioLuxAxC8tTjaUJX';

        // Buat request ke API menggunakan CURLRequest dari CI4
        $client = \Config\Services::curlrequest();

        try {
            // Lakukan request ke API dengan menyertakan API key sebagai header
            $response = $client->get($url, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            // Ambil body dari response
            $data = json_decode($response->getBody(), true);

            // Kirimkan data ke view jika struktur data sesuai
            if (isset($data['data'])) {
                return view('home', ['banners' => $data['data']]);
            } else {
                // Jika struktur data tidak sesuai, kirim pesan kesalahan
                return $this->failServerError('Invalid API response structure.');
            }

        } catch (\Exception $e) {
            // Jika terjadi error
            return $this->failServerError($e->getMessage());
        }
    }

}
