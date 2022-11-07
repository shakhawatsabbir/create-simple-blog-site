<?php


namespace App\classes;


class Blog
{
    public $blogs = [];
    public $data =[];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id'  => 1,
                'category_id' => 1,
                'title' => 'শতাধিক দোকান উচ্ছেদ, রাজউকের ৩ একর জায়গা উদ্ধার ',
                'description' => 'রাজধানীর উত্তরা-১৮ নম্বর সেক্টরে রাজধানী উন্নয়ন কর্তৃপক্ষের (রাজউক) ‘অ্যাপার্টমেন্ট প্রজেক্ট’ এলাকার পশ্চিম পাশে গড়ে ওঠা অবৈধ বাজার উচ্ছেদ করা হয়েছে। সেখানে শতাধিক দোকান ছিল। রাজউকের বাস্তবায়ন-৬–এর নির্বাহী প্রকৌশলী হাফিজুল ইসলাম বলেন, আজ সোমবার সকালে এ অভিযান চালিয়ে বেদখলে থাকা প্রায় তিন একর জায়গা উদ্ধার করা হয়েছে।<br/><br/>
                                    বাণিজ্যিক প্লটের জায়গায় দখলদার নিয়ে গত ২৬ ফেব্রুয়ারি প্রথম আলোতে ‘রাজউকের জমিতে অবৈধ বাজার’ শিরোনামে একটি প্রতিবেদন ছাপা হয়েছিল। রাজউকের জমি দখল করে বাজার গড়ে তুলেছিলেন শ্রমিক লীগের নেতারা। ওই বাজার থেকে প্রতি মাসে চার লাখ টাকার বেশি চাঁদা তোলা হতো। এই টাকার ভাগ পেতেন ক্ষমতাসীন দলের নেতা থেকে শুরু করে রাজউকের অসাধু কর্মীরাও।
আজ সকাল সাড়ে ৯টার দিকে সে অবৈধ বাজারে উচ্ছেদ অভিযান শুরু হয়। বেলা দেড়টার দিকে উচ্ছেদ অভিযান শেষ হয়। রাজধানী উন্নয়ন কর্তৃপক্ষ (রাজউক) উত্তরা বিভাগের বাস্তবায়ন-৬ থেকে এই উচ্ছেদ অভিযান পরিচালনা করা হয়। অভিযানে নেতৃত্ব দিয়েছেন নির্বাহী ম্যাজিস্ট্রেট শামসুল হক। <br/><br/>
                                    রাজধানী উন্নয়ন কর্তৃপক্ষের (রাজউক) বাস্তবায়ন-৬–এর নির্বাহী প্রকৌশলী হাফিজুল ইসলাম প্রথম আলোকে বলেন, ‘রাজউকের তৃতীয় পর্যায় প্রকল্পে প্রায় ১০০ একর জায়গা বাণিজ্যিক প্লটের জন্য নির্ধারণ করা আছে। বাস্তবে ওই প্লটগুলো খালি। ওই খালি জায়গাগুলোয় অনেক দিন আগে থেকেই অনুপ্রবেশ ঘটেছে। যেগুলো আমরা বিভিন্ন সময় অভিযানের মাধ্যমে উচ্ছেদ করেছি। এরই ধারাবাহিকতায় আজ রাজউক উত্তরা ১৮ নম্বর সেক্টরে আবাসিক প্রকল্পের পশ্চিম পাশে বেড়িবাঁধসংলগ্ন পঞ্চপট্টি এলাকায় উচ্ছেদ অভিযান চালানো হয়। ওই জায়গায় তিন–চার মাস ধরে একটি অবৈধ বাজার গড়ে উঠেছিল। বাজারের ভেতর ১০০টির মতো দোকান ছিল। এই জায়গার পরিমাণ তিন একরের মতো।’',
                'image' => 'news 2.webp'
            ],
            1 => [
                'id'  => 2,
                'category_id' => 1,
                'title' => 'This is National blog title Two ',
                'description' => 'This is National blog description Two',
                'image' => 'download1.jpg'
            ],
            2 => [
                'id'  => 3,
                'category_id' => 1,
                'title' => 'This is National blog title Three ',
                'description' => 'This is National blog description Three',
                'image' => 'download2.jpg'
            ],
            3 => [
                'id'  => 4,
                'category_id' => 3,
                'title' => 'This is sports blog title one ',
                'description' => 'This is sports blog description one',
                'image' => 'download3.jpg'
            ],
            4 => [
                'id'  => 5,
                'category_id' => 4,
                'title' => 'This is Entertainment  title one ',
                'description' => 'This is Entertainment blog description one',
                'image' => 'images4.jpg'
            ],
            5 => [
                'id'  => 6,
                'category_id' => 2,
                'title' => 'This is International blog title one ',
                'description' => 'This is National blog description one',
                'image' => 'download1.jpg'
            ],
            6 => [
                'id'  => 7,
                'category_id' => 2,
                'title' => 'This is International blog title two ',
                'description' => 'This is National blog description two',
                'image' => 'download2.jpg'
            ],
            7 => [
                'id'  => 8,
                'category_id' => 3,
                'title' => 'This is sports blog title Two ',
                'description' => 'This is sports blog description one',
                'image' => 'download3.jpg'
            ],
            8 => [
                'id'  => 9,
                'category_id' => 4,
                'title' => 'This is Entertainment  title Two ',
                'description' => 'This is Entertainment blog description one',
                'image' => 'images4.jpg'
            ],
            9 => [
                'id'  => 10,
                'category_id' => 1,
                'title' => 'সেই পুরোনো সমস্যার ঘেরাটোপেই কি বন্দী থাকবে পাবলিক পরীক্ষা ',
                'description' => 'দেশে ২০১৯ সালের আগে অবস্থাটি এমন পর্যায়ে গিয়েছিল যে পাবলিক পরীক্ষা মানেই প্রশ্নপত্র ফাঁস হতো বা অভিযোগ উঠত! এসএসসি, এইচএসসি কিংবা জেএসসি পরীক্ষা যে পরীক্ষাই হোক না কেন, প্রশ্নপত্র ফাঁসসংক্রান্ত কোনো না কোনো অভিযোগ উঠত। কখনো কখনো শিশুদের প্রাথমিক শিক্ষা সমাপনী পরীক্ষায়ও এ ধরনের অভিযোগ উঠত। এ নিয়ে সাবেক শিক্ষামন্ত্রী নুরুল ইসলাম নাহিদ চরম বিতর্কের মুখে পড়েছিলেন। 
                                    <br/> <br/> অবশ্য তাঁর মেয়াদের শেষ বছরেই অভিযোগ বন্ধ হয়েছিল। তখন নানামুখী তৎপরতায়, বিশেষ করে আইনশৃঙ্খলা রক্ষাকারী বাহিনীর কঠোর অবস্থান এবং কোন সেট প্রশ্নপত্রে পরীক্ষা হবে, তা পরীক্ষা শুরুর মাত্র ২৫ মিনিট আগে জানানোসহ কিছু পদক্ষেপর কারণে তখন এ অভিযোগ বন্ধ হয়েছিল।
                                  এরপরের তিন বছর আর এ নিয়ে অভিযোগ ওঠেনি। এর মধ্যে অবশ্য দুই বছর গেছে পুরোপুরি করোনাকাল। এ সময়ে কখনো পরীক্ষা হয়েছে, কখনো ভিন্নভাবে মূল্যায়ন করা হয়েছে।েই পুরোনো সমস্যার ঘেরাটোপেই কি বন্দী থাকবে পাবলিক পরীক্ষা করোনা পরিস্থিতি কাটিয়ে এখন অনেকটা স্বাভাবিক পরিস্থিতিতে অনুষ্ঠিত হচ্ছে পাবলিক পরীক্ষা। কিন্তু দেখা যাচ্ছে, পুরোনা সমস্যাগুলো আসলে শেষ হয়ে যায়নি। 
                                  <br/><br/> এর মধ্যে প্রশ্নপত্র ফাঁসের ঘটনা যেমন আছে, তেমনি ভুল পত্র বিতরণের কারণে পরীক্ষা স্থগিতের মতো ঘটনা ঘটছে। এ ছাড়া কোনো কোনো শিক্ষা বোর্ডে কোনো কোনো বিষয়ে বিতর্কিত প্রশ্ন করার মতো ঘটনাও ঘটেছে।
                                    আর এসবের কারণে সমস্যায় পড়ছে পরীক্ষার্থীরা। বিদ্যমান পাবলিক পরীক্ষা নিয়ে এমনিতেই শিক্ষার্থীরা চাপে থাকে। এর মধ্যে এসব অনাকাঙ্ক্ষিত ঘটনা তাদের আরও চাপে ফেলে দেয়। অথচ একটি পাবলিক পরীক্ষা হয় দীর্ঘ সময় নিয়ে নানা প্রস্তুতির মধ্য দিয়ে।',
                'image' => 'news 1.webp'
            ],
        ];

    }

    public function getAllBlogs()
    {
        return $this->blogs;
    }
    public function getBlogByCategoryId($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['category_id'] == $id )
            {
                array_push($this->data, $blog);
            }
        }
        return $this->data;
    }
    public function getBlogByDescriptionId($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $id )
            {
                array_push($this->data, $blog);
            }
        }
        return $this->data;
    }
}