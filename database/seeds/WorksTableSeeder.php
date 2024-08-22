<?php
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Work::create([
            'name' => 'Glomeradados - Databases',
            'client' => 'Databases - University',
            'url' => 'bd.henriquesilva.pt',
            'id_category' => 1,
            'a' => 'glomeradados',
            'descricao' => 'The aim of this project is to provide students with experience in developing database systems. The project is based in industry’s best practices for software development, thus students will experience all the main stages of a common software project, from the very beginning to production release.'
        ]);

        Work::create([
            'name' => 'Data Visualization in Social Network',
            'client' => 'Technology for Social Web - University',
            'url' => 'taws.henriquesilva.pt',
            'id_category' => 1,
            'a' => 'data_visualization',
            'descricao' => 'The purpose of the website was to get to know more about methodologies and techonologies used in the social web context, by creating a website that used the Meetups API.'
        ]);

        Work::create([
            'name' => 'Releituras -  Archive of Concrete Poetry',
            'client' => 'Design IV - University',
            'url' => 'd4.henriquesilva.pt',
            'id_category' => 1,
            'a' => 'releituras',
            'descricao' => 'This website acted as an archive of performances done during the classes. The program had its base in concrete poetry and it had support weekly shows from various writers, artists and performers.'
        ]);



        Work::create([
            'name' => 'EXP - TV Channel Identity',
            'client' => 'Digital Prodution - University',
            'url' => 'pd.henriquesilva.pt',
            'id_category' => 1,
            'a' => 'exp',
            'descricao' => 'This website acted as support for an identity channel project, to host and show all the content produced during the classes.'

        ]);

        Work::create([
            'name' => 'Free Seasonal Publication - DEI/CISUC',
            'client' => 'Design III - University',
            'url' => 'd3.henriquesilva.pt',
            'id_category' => 1,
            'a' => 'newsletter',
            'descricao' => 'The project was about transforming a paper newsletter into a virtual one. While trying to maintain its identity and not emulating but transforming the way it could be seen and accessed.'
        ]);
    /*

        Work::create([
            'name' => 'Museu da Pedra',
            'client' => 'Internet Technology - University',
            'url' => 'ti.henriquesilva.pt',
            'id_category' => 1,
            'a' => 'museu',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum quam eu commodo sollicitudin. Duis sed elementum felis, ornare gravida justo. Etiam vel nisi condimentum, lacinia tortor a, egestas lacus. Suspendisse interdum enim vitae odio efficitur molestie. Proin nec molestie nisl.'
        ]);

        Work::create([
            'name' => 'Queima 24! - Short Film Contest',
            'client' => 'tvAAC',
            'url' => 'tv.aac.uc.pt/queima24/',
            'id_category' => 1,
            'a' => 'queima24',
            'descricao' => 'Built in 2010, this was the initiation into the web development world. With the exception of the javascript navigation, the typo photography and design were made by me.'
        ]);

    */
    }
}
