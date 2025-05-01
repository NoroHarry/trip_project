<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TermPrivacyItem;

class TermPrivacyItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TermPrivacyItem::create([
            'term' => '<h1>Heading Item</h1>
<p>Lorem ipsum dolor sit amet, ex est debet iuvaret scripserit, no graeco facilisis vix. Eam cu odio quidam antiopam, duo liber movet in. Ex has diceret nostrum legendos, ex choro apeirian nam, ridens verterem interpretaris ne eam. Ne harum deleniti pri. No civibus invenire mel, id vix doming erroribus omittantur. Et summo ridens mea, mei copiosae percipitur no. Paulo mandamus prodesset an duo, everti oblique epicurei te duo. Mei ad senserit evertitur. Sed dictas dissentiet id, est iudico salutandi eloquentiam no. Sea ei sonet ornatus interpretaris, quas rebum omnium cu quo. Nam oblique singulis at.</p>
<h2>Heading Item</h2>
<p>Lorem ipsum dolor sit amet, ex est debet iuvaret scripserit, no graeco facilisis vix. Eam cu odio quidam antiopam, duo liber movet in. Ex has diceret nostrum legendos, ex choro apeirian nam, ridens verterem interpretaris ne eam. Ne harum deleniti pri. No civibus invenire mel, id vix doming erroribus omittantur. Et summo ridens mea, mei copiosae percipitur no. Paulo mandamus prodesset an duo, everti oblique epicurei te duo. Mei ad senserit evertitur. Sed dictas dissentiet id, est iudico salutandi eloquentiam no. Sea ei sonet ornatus interpretaris, quas rebum omnium cu quo. Nam oblique singulis at.</p>
<h3>Heading Item</h3>
<p>Lorem ipsum dolor sit amet, ex est debet iuvaret scripserit, no graeco facilisis vix. Eam cu odio quidam antiopam, duo liber movet in. Ex has diceret nostrum legendos, ex choro apeirian nam, ridens verterem interpretaris ne eam. Ne harum deleniti pri. No civibus invenire mel, id vix doming erroribus omittantur. Et summo ridens mea, mei copiosae percipitur no. Paulo mandamus prodesset an duo, everti oblique epicurei te duo. Mei ad senserit evertitur. Sed dictas dissentiet id, est iudico salutandi eloquentiam no. Sea ei sonet ornatus interpretaris, quas rebum omnium cu quo. Nam oblique singulis at.</p>',
            'privacy' => '<h1>Heading Item</h1>
<p>Lorem ipsum dolor sit amet, ex est debet iuvaret scripserit, no graeco facilisis vix. Eam cu odio quidam antiopam, duo liber movet in. Ex has diceret nostrum legendos, ex choro apeirian nam, ridens verterem interpretaris ne eam. Ne harum deleniti pri. No civibus invenire mel, id vix doming erroribus omittantur. Et summo ridens mea, mei copiosae percipitur no. Paulo mandamus prodesset an duo, everti oblique epicurei te duo. Mei ad senserit evertitur. Sed dictas dissentiet id, est iudico salutandi eloquentiam no. Sea ei sonet ornatus interpretaris, quas rebum omnium cu quo. Nam oblique singulis at.</p>
<h2>Heading Item</h2>
<p>Lorem ipsum dolor sit amet, ex est debet iuvaret scripserit, no graeco facilisis vix. Eam cu odio quidam antiopam, duo liber movet in. Ex has diceret nostrum legendos, ex choro apeirian nam, ridens verterem interpretaris ne eam. Ne harum deleniti pri. No civibus invenire mel, id vix doming erroribus omittantur. Et summo ridens mea, mei copiosae percipitur no. Paulo mandamus prodesset an duo, everti oblique epicurei te duo. Mei ad senserit evertitur. Sed dictas dissentiet id, est iudico salutandi eloquentiam no. Sea ei sonet ornatus interpretaris, quas rebum omnium cu quo. Nam oblique singulis at.</p>
<h3>Heading Item</h3>
<p>Lorem ipsum dolor sit amet, ex est debet iuvaret scripserit, no graeco facilisis vix. Eam cu odio quidam antiopam, duo liber movet in. Ex has diceret nostrum legendos, ex choro apeirian nam, ridens verterem interpretaris ne eam. Ne harum deleniti pri. No civibus invenire mel, id vix doming erroribus omittantur. Et summo ridens mea, mei copiosae percipitur no. Paulo mandamus prodesset an duo, everti oblique epicurei te duo. Mei ad senserit evertitur. Sed dictas dissentiet id, est iudico salutandi eloquentiam no. Sea ei sonet ornatus interpretaris, quas rebum omnium cu quo. Nam oblique singulis at.</p>',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
