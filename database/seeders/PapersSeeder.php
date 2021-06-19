<?php

namespace Database\Seeders;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PapersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //papers
        $pdf1_url = "https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/web/compressed.tracemonkey-pldi-09.pdf";
        $uuid_pdf1 =  Uuid::generate()->string;
        //content
        $uuid_content1 =  Uuid::generate()->string;
        $pdf1_name = "Algoritmos y programación";
        $pdf1_description = "Este artículo nos dara una mejor comprensión de los algoritmos y la programación";
        $pdf1_linktext = "Paper de algoritmos";

        //papers
        $pdf2_url = "https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/web/compressed.tracemonkey-pldi-09.pdf";
        $uuid_pdf2 =  Uuid::generate()->string;
        //content
        $uuid_content2=  Uuid::generate()->string;
        $pdf2_name = "Estructuras de control y programación";
        $pdf2_description = "Este articulo nos ejemplifica como las estructuras de control funcionan en la programación";
        $pdf2_linktext = "Estructuras de control";


        //papers
        $pdf3_url = "https://raw.githubusercontent.com/mozilla/pdf.js/ba3edeae/web/compressed.tracemonkey-pldi-09.pdf";
        $uuid_pdf3 =  Uuid::generate()->string;
        //content
        $uuid_content3=  Uuid::generate()->string;
        $pdf3_name = "Arreglos";
        $pdf3_description = " Este articulo nos ejemplifica los arreglo ";
        $pdf3_linktext = "Arreglos";
        DB::table('contents')->insert([
            [
                'id' => $uuid_content1,
                'name' => $pdf1_name,
                'description' => $pdf1_description,
                'link_text' => $pdf1_linktext
            ],
            [
                'id' => $uuid_content2,
                'name' => $pdf2_name,
                'description' => $pdf2_description,
                'link_text' => $pdf2_linktext,
            ],
            [
                'id' => $uuid_content3,
                'name' => $pdf3_name,
                'description' => $pdf3_description,
                'link_text' => $pdf3_linktext,
            ],
        ]);
        DB::table('papers')->insert([
            [
                'id' =>$uuid_pdf1,
                'PDF_URL' => $pdf1_url,
                'content_id'=> $uuid_content1,
            ],
            [
                'id' => $uuid_pdf2,
                'PDF_URL' => $pdf2_url,
                'content_id'=> $uuid_content2,
            ],
            [
                'id' => $uuid_pdf3,
                'PDF_URL' => $pdf3_url,
                'content_id'=> $uuid_content3,
            ],
        ]);

    }
}
