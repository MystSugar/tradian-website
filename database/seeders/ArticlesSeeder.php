<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'heading' => 'Self Registration Guide',
            'image' => 'https://traders-api.tradeline.gov.mv/uploads/thomas_lefebvre_gp8_B_Lya_Ta_A0_unsplash_a3422d9b45.jpg',
            'description' => 'This guide provides step-by-step instructions on how to register a new user.',
            'body' => "To register for Tradian through the Maldives National Single Window, first visit the website at tradian.gov.mv. 
            
            On the homepage, click \"Login\" and then select \"Register\" to begin the process. Log in using your eFaas credentials, which could be your ID card, passport, work permit, or mobile number. If you don’t have an eFaas account, you’ll need to register for one first. After logging in, grant access to the Maldives National Single Window by clicking \"Allow Access.\" 
            
            You’ll then be directed to the party registration form, where some fields will be pre-filled based on the Ministry's data. Choose your \"User Group\" (Freight Forwarder, Shipping Agent, Importer, or Exporter), select the relevant sector, and choose your business from the list of registered companies. If you have a registered business name, select it, and your contact details will be auto-filled from your eFaas account, which you can review and update as needed. 
            
            Then, select the appropriate ID type (ID Card or Passport), your preferred communication mode (Email or Phone), and language preference. Enter your Tax Identification Number (TIN) and complete any optional fields. Verify your registration with a Captcha, attach any required documents, and finally, submit your registration. 
            
            Once submitted, your request will be reviewed by the relevant authority, either MOTCA for shipping agents or MCS for importers, exporters, and freight forwarders."
        ]);

        Article::create([
            'heading' => 'Vessel Registration Manual',
            'image' => 'https://traders-api.tradeline.gov.mv/uploads/mohamed_masaau_nf_F5_G6c_Fw_Y_unsplash_c72708e7a9.jpg',
            'description' => 'This guide offers comprehensive instructions on how to register a vessel through the online portal.',
            'body' => "The Vessel Registration User Manual provides step-by-step instructions for registering a vessel through the online portal. 
            
            To begin, access the portal and log in using your eFaas credentials. If you have multiple profiles, switch to the appropriate one, such as Shipping Agent (SA). From the side menu, navigate to \"Vessel Management\" and select \"Vessel Registration\" to start the process. Click \"Add New Record\" and fill in the mandatory vessel details, ensuring all required fields are completed before saving. Next, upload necessary documents, including the vessel registry, SA registry, and general arrangement chart blueprint, in the specified formats. 
            
            Once all documents are uploaded, save the record, ensuring all mandatory documents are attached before submitting the request. After submission, you can view the registered vessel in the \"Registered Vessel List.\" For assistance, contact customer support."
        ]);

        Article::create([
            'heading' => 'User Acceptance Testing for MNSW Begins',
            'image' => 'https://beehiiv-images-production.s3.amazonaws.com/uploads/asset/file/7c5f9dfe-f9ce-4ffb-a255-46f04979aecf/uat4.jpg?t=1721637767',
            'description' => 'User Acceptance Testing (UAT) for the Maldives National Single Window (MNSW) project began last week.',
            'body' => "The Maldives National Single Window (MNSW) Project aims to streamline international trade by enabling parties to submit information and documents through a single digital platform. A key part of this adoption process is User Acceptance Testing (UAT), which allows real users to test the system before launch. 
            
            The MNSW UAT involves cross-border regulatory authorities (CBRAs), shipping agents, freight forwarders, and traders. The testing is broken into three cycles: Cycle 1 (July 21 to August 11, 2024), Cycle 2 (August 11 to 15, 2024), and Cycle 3 (August 18 to 22, 2024). Cycle 1 covers sessions on vessel registration, document management, manifest management, product management, and more. Cycle 2 is dedicated to retesting failed scenarios, while Cycle 3 focuses on offline testing. 
            
            The MNSW UAT is an essential step before the system’s limited rollout. Participants’ input has been vital in refining the system for its official launch."
        ]);

        Article::create([
            'heading' => 'The Need for the MNSW System',
            'image' => 'https://beehiiv-images-production.s3.amazonaws.com/uploads/asset/file/9e45f61b-4549-4d83-bab7-b4cee6613e67/frank-mckenna-tjX_sniNzgQ-unsplash.jpg?t=1725287349',
            'description' => 'A look at why the Maldives National Single Window system is needed.',
            'body' => "The Maldives National Single Window (MNSW) system aims to streamline cross-border trade by consolidating trade transactions into a single platform, reducing processing times and costs. It enhances accuracy by minimizing repetitive data entry, improves transparency by providing real-time information to stakeholders, and fosters a more efficient and predictable trade environment. 
            
            MNSW will address current trade inefficiencies, making the Maldives more competitive globally. As a WTO member and signatory to the WTO Trade Facilitation Agreement, MNSW will help the Maldives comply with international trade standards, including the TFA and IMO's FAL Convention, improving the country’s trade competitiveness."
        ]);

        Article::create([
            'heading' => 'Extensive Preparations and Activities Pave the Way for Rollout of MNSW',
            'image' => 'https://beehiiv-images-production.s3.amazonaws.com/uploads/asset/file/88fc77f6-aec5-49df-89a7-83fe0679e972/GWIvMWmW4AAmpTM.jpg?t=1725287775',
            'description' => 'Let’s take a look at some of the key activities that the MNSW team has undertaken since July in preparation for the upcoming rollout.',
            'body' => "The Maldives National Single Window (MNSW) system is set to modernize trade processes by providing a unified platform for submitting and exchanging trade documents. The system’s rollout is scheduled for September 3, 2024, and preparatory activities, including User Acceptance Testing (UAT) and training sessions, have been ongoing since July. 
            
            The UAT, involving 78 participants from cross-border regulatory authorities (CBRAs) and local trade stakeholders, successfully tested the system’s functionality. Training and awareness sessions, targeting both internal and external stakeholders, aim to promote the system's benefits. With the system’s implementation, MNSW will streamline trade operations, enhancing efficiency and predictability in the Maldives' trade sector."
        ]);
    }
}
