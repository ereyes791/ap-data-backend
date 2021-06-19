<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
use App\Models\Video;
use App\Models\Content;
use App\Models\KeyTerms;
class VideosSeeder extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //intro
        $yt_url1 = '1eY8kkFN0TY';
        $uuid_video1 =  Uuid::generate()->string;

        $uuid_content1 =  Uuid::generate()->string;
        $content1_desc = 'Un algoritmo es un procedimiento bien definido para resolver un problema.
            Todo el mundo conoce y utiliza algoritmos a diario, incluso sin darse cuenta:
            Una receta de cocina es un algoritmo; si bien podríamos cuestionar que algunos pasos son ambiguos (¿cuánto es «una pizca de sal»? ¿qué significa «agregar a gusto»?), en general las instrucciones están lo suficientemente bien definidas para que uno las pueda seguir sin problemas.
            La entrada de una receta son los ingredientes y algunos datos como: ¿para cuántas personas se cocinará? El proceso es la serie de pasos para manipular los ingredientes. La salida es el plato terminado.
            En principio, si una receta está suficientemente bien explicada, podría permitir preparar un plato a alguien que no sepa nada de cocina.';
        $content1_name = 'Algoritmos';
        $content1_link_text = 'Un algoritmo';

        $yt_url2 = 'IbBPIna6nzc';
        $uuid_video2 =  Uuid::generate()->string;

        $uuid_content2 =  Uuid::generate()->string;
        $content2_desc = 'Al diseñar un programa, el desafío principal es crear y describir un procedimiento que esté completamente bien definido, que no tenga ambigüedades, y que efectivamente resuelva el problema.
            Así es como la programación no es tanto sobre computadores, sino sobre resolver problemas de manera estructurada. El objeto de estudio de la programación no son los programas, sino los algoritmos.';
        $content2_name = 'Introduccion a los algoritmos';
        $content2_link_text = 'Introduccion a la programacion';

        // controls struc
        $yt_url3 = '4TKR47s1BHM';
        $uuid_video3 =  Uuid::generate()->string;

        $uuid_content3 =  Uuid::generate()->string;
        $content3_desc = 'los lenguajes de programación modernos tienen estructuras de control similares. Básicamente lo que varía entre las estructuras de control de los diferentes lenguajes es su sintaxis; cada lenguaje tiene una sintaxis propia para expresar la estructura.
            Otros lenguajes ofrecen estructuras diferentes, como por ejemplo los comandos guardados.';
        $content3_name = 'Estructuras de control';
        $content3_link_text = 'Estruras de control';

        $keyTerms='Databases';
        $keyTerms_meaning='Databases are programs that either use disk or memory to do 2 core things:record data and querysdata. In general, they are themselves
          servers that are long lived and interact with the rest of your application
          through network calls, with protocols on top of TCP or even HTTP.';
        $keyTerms2 = 'Antecedentes';
        $keyTerms2_meaning = 'El término "estructuras de control" viene del campo de la ciencia computacional. Cuando se presentan implementaciones de Java para las estructuras de control, nos referimos a ellas con la terminología de la Especificación del lenguaje Java, que se refiera a ella como instrucciones modernas.';
        $keyTerms3 = 'Estructura de control';
        $keyTerms3_meaning = 'Las estructuras de control, denominadas también sentencias de control, permiten tomar decisiones y realizar un proceso repetidas veces. Se trata de estructuras muy importantes, ya que son las encargadas de controlar el flujo de un programa, según los requerimientos del mismo. canal o proceso que se puede actualizar';

        DB::table('contents')->insert([
            [
                'id' => $uuid_content1,
                'name' => $content1_name,
                'description' => $content1_desc,
                'link_text' => $content1_link_text
            ],
            [
                'id' => $uuid_content2,
                'name' => $content2_name,
                'description' => $content2_desc,
                'link_text' => $content2_link_text,
            ],
            [
                'id' => $uuid_content3,
                'name' => $content3_name,
                'description' => $content3_desc,
                'link_text' => $content3_link_text,
            ],
        ]);
        DB::table('videos')->insert([
            [
                'id' =>$uuid_video1,
                'YT_video_URL' => $yt_url1,
                'content_id'=> $uuid_content1,
            ],
            [
                'id' => $uuid_content2,
                'YT_video_URL' => $yt_url2,
                'content_id'=> $uuid_content2,
            ],
            [
                'id' => $uuid_content3,
                'YT_video_URL' => $yt_url3,
                'content_id'=> $uuid_content3,
            ],
        ]);
        DB::table('terms')->insert([
            [
                'terms_id' => Uuid::generate()->string,
                'concept_name' => $keyTerms,
                'concept' => $keyTerms_meaning,
                'video_id' => $uuid_video1,
            ],
            [
                'terms_id' => Uuid::generate()->string,
                'concept_name' => $keyTerms2,
                'concept' => $keyTerms2_meaning,
                'video_id' => $uuid_video1,
            ],
            [
                'terms_id' => Uuid::generate()->string,
                'concept_name' => $keyTerms3,
                'concept' => $keyTerms3_meaning,
                'video_id' => $uuid_video1,
            ],
        ]);
    }
}
