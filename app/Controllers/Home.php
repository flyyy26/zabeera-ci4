<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // API URLs
        $bannerUrl = "https://prahwa.net/api/banners";
        $productsUrl = "https://prahwa.net/api/products";
        $reviewUrl = "https://prahwa.net/api/review";
        // API Key
        $apiKey = 'OvauuzVrAfGJtWQoksw70zJDioLuxAxC8tTjaUJX';

        // Buat request ke API menggunakan CURLRequest dari CI4
        $client = \Config\Services::curlrequest();

        try {
            // Lakukan request ke API banners
            $bannerResponse = $client->get($bannerUrl, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            // Ambil body dari response
            $bannerData = json_decode($bannerResponse->getBody(), true);

            // Filter hanya yang memiliki type 'default'
            $banners = array_filter($bannerData['data'], function($banner) {
                return $banner['type'] === 'default';
            });

            // Filter hanya yang memiliki type 'body2'
            $bannersTwo = array_filter($bannerData['data'], function($banner) {
                return $banner['type'] === 'body2';
            });

            // Lakukan request ke API products
            $productResponse = $client->get($productsUrl, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            $reviewResponse = $client->get($reviewUrl, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            // Ambil body dari response
            $productData = json_decode($productResponse->getBody(), true);
            $reviewData = json_decode($reviewResponse->getBody(), true);

            // Kirimkan data ke view
            $data = [
                'banners' => $banners,
                'bannersTwo' => $bannersTwo,
                'products' => $productData['data'],
                'review' => $reviewData['data'],
                'is_home_active' => true
            ];

            return view('home', $data);

        } catch (\Exception $e) {
            // Jika terjadi error
            return view('home', [
                'is_home_active' => true,
                'error' => $e->getMessage()
            ]);
        }
    }

    public function about()
    {
        $productsUrl = "https://prahwa.net/api/products";

        // API Key
        $apiKey = 'OvauuzVrAfGJtWQoksw70zJDioLuxAxC8tTjaUJX';

        // Buat request ke API menggunakan CURLRequest dari CI4
        $client = \Config\Services::curlrequest();

        try {
            // Lakukan request ke API products
            $productResponse = $client->get($productsUrl, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            // Ambil body dari response
            $productData = json_decode($productResponse->getBody(), true);

            // Kirimkan data ke view
            $data = [
                'products' => $productData['data'],
                'is_about_active' => true
            ];

            return view('about', $data);

        } catch (\Exception $e) {
            // Jika terjadi error
            return view('about', [
                'is_about_active' => true,
                'error' => $e->getMessage()
            ]);
        }
    }

    public function product()
    {
        // API URL
        $productsUrl = "https://prahwa.net/api/products";

        // API Key
        $apiKey = 'OvauuzVrAfGJtWQoksw70zJDioLuxAxC8tTjaUJX';

        // Buat request ke API menggunakan CURLRequest dari CI4
        $client = \Config\Services::curlrequest();

        try {
            // Lakukan request ke API products
            $productResponse = $client->get($productsUrl, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            // Ambil body dari response
            $productData = json_decode($productResponse->getBody(), true);

            // Kirimkan data ke view
            $data = [
                'products' => $productData['data'],
                'is_product_active' => true
            ];

            return view('product', $data);

        } catch (\Exception $e) {
            // Jika terjadi error
            return view('product', [
                'is_product_active' => true,
                'error' => $e->getMessage()
            ]);
        }
    }

    public function faq()
    {
        // API URL
        $faqsUrl = "https://prahwa.net/api/faqs";

        // API Key
        $apiKey = 'OvauuzVrAfGJtWQoksw70zJDioLuxAxC8tTjaUJX';

        // Buat request ke API menggunakan CURLRequest dari CI4
        $client = \Config\Services::curlrequest();

        try {
            // Lakukan request ke API products
            $faqResponse = $client->get($faqsUrl, [
                'headers' => [
                    'api-key' => $apiKey
                ]
            ]);

            // Ambil body dari response
            $faqData = json_decode($faqResponse->getBody(), true);

            // Kirimkan data ke view
            $data = [
                'faqs' => $faqData['data'],
                'is_faq_active' => true
            ];

            return view('faq', $data);

        } catch (\Exception $e) {
            // Jika terjadi error
            return view('faq', [
                'is_faq_active' => true,
                'error' => $e->getMessage()
            ]);
        }
    }
}
