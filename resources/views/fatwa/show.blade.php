@extends('layouts.app')

@section('content')
    <x-hero title="Pembiayaan Likuiditas Jangka Pendek Syariah" subtitle="Fatwa DSN"/>

    <div class="bg-gray-100">
        <div class="p-4 max-w-3xl overflow-x-auto m-auto">
            <div class="bg-white rounded-lg shadow-md text-sm p-8">

                <p class="titel_fatwa_kecil">
                    FATWA<br>
                    DEWAN SYARI’AH NASIONAL<br>
                    Nomor 109/DSN-MUI/II/2017<br>Tentang<br><span class="titel_fatwa_besar">Pembiayaan Likuiditas Jangka Pendek Syariah</span>
                </p>
                <p class="arab18tengah">بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                <p>Dewan Syariah Nasional - Majelis Ulama Indonesia (DSN-MUI), setelah</p>
                <table id="tabel_fatwa" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td>Menimbang</td>
                        <td class="titik_dua">:</td>
                        <td width="88%">
                            <ol type="a">
                                <li>bahwa dalam rangka menjaga stabilitas sistem keuangan diperlukan upaya pencegahan
                                    dan penanganan krisis sistem keuangan oleh Bank Indonesia sebagai <em>lender of the
                                        last resort</em> (<em>al-muqridhal-akhir)</em> sebagaimana diamanahkan oleh
                                    undang-undang;
                                </li>
                                <li>bahwa dalam rangka memitigasi risiko atas kesulitan likuiditas Bank Syariah
                                    diperlukan Pembiayaan Likuiditas Jangka Pendek berdasarkan prinsip syariah;
                                </li>
                                <li>bahwa <em>dhawabith</em> (ketentuan) dan <em>hudud </em>(batasan) terkait Pembiayaan
                                    Likuiditas Jangka Pendek berdasarkan Prinsip Syariah belum diatur dalam fatwa
                                    DSN-MUI;
                                </li>
                                <li>bahwa atas dasar pertimbangan pada huruf a, huruf b, dan huruf c, DSN-MUI memandang
                                    perlu menetapkan fatwa tentang Pembiayaan Likuiditas Jangka Pendek berdasarkan
                                    Prinsip Syariah untuk dijadikan pedoman;
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>Mengingat</td>
                        <td class="titik_dua">:</td>
                        <td>
                            <ol>
                                <li>Firman Allah SWT:
                                    <ol type="a">
                                        <li>QS. al-Ma`idah (5): 1:
                                            <p class="arab18rata">يٰأَيُّهَا الَّذينَ ءامَنوا أَوفوا بِالعُقودِ ...</p>
                                            <p class="terjemah">"Hai orang yang beriman, penuhilah akad-akad itu
                                                ..."</p>
                                        </li>
                                        <li>QS. al-Isra` (17): 34:
                                            <p class="arab18rata">وَاَوْفُوْا بِالْعَهْدِ اِنَّ الْعَهْدَ كَانَ
                                                مَسْئُوْلاً …</p>
                                            <p class="terjemah">"... Dan penuhilah janji, karena janji itu pasti diminta
                                                pertanggungjawabannya."</p>
                                        </li>
                                        <li>QS. an-Nisa` (4): 29:
                                            <p class="arab18rata">يَا أَيُّهَا الَّذِيْنَ آمَنُواْ لاَ تَأْكُلُواْ
                                                أَمْوَالَكُمْ بَيْنَكُمْ بِالْبَاطِلِ إِلاَّ أَنْ تَكُوْنَ تِجَارَةً
                                                عَنْ تَرَاضٍ مِّنْكُمْ وَلاَ تَقْتُلُوْا أَنْفُسَكُمْ إِنَّ اللهَ كَانَ
                                                بِكُمْ رَحِيْمًا.</p>
                                            <p class="terjemah">“Hai orang yang beriman! Janganlah kamu saling memakan
                                                harta sesamamu dengan jalan yang batil (tidak benar), kecuali dalam
                                                perdagangan yang berlaku atas dasar suka sama suka di antara kamu. Dan
                                                janganlah kamu membunuh dirimu. Sungguh, Allah Maha Penyayang
                                                kepadamu.”</p>
                                        </li>
                                        <li>QS. al-Baqarah (2): 278:
                                            <p class="arab18rata">يَا أَيُّهَا َالَّذِيْنَ آمَنُوا اتَّقُوا اللهَ
                                                وَذَرُوْا مَا بَقِيَ مِنَ الرِّبَوا إِنْ كُنْتُمْ مُؤْمِنِيْنَ.</p>
                                            <p class="terjemah">“Hai orang yang beriman! Bertakwalah kepada Allah dan
                                                tinggalkan sisa riba (yang belum dipungut), jika kamu orang
                                                beriman.”</p>
                                        </li>
                                        <li>QS. al-Nisa` (4): 58:
                                            <p class="arab18rata">إِنَّ اللهَ يَأْمُرُكُمْ أَنْ تُؤَدُّواْ الْأَمَنَاتِ
                                                اِلَى اَهْلِهَا وَإِذاَ حَكَمْتُمْ بَيْنَ النّاَسِ أَنْ تَحْكُمُوْا
                                                بِالْعَدْلِ...</p>
                                            <p class="terjemah">“Sesungguhnya Allah menyuruh kamu menyampaikan amanat
                                                kepada yang berhak menerimanya dan apabila kamu menetapkan hukum di
                                                antara manusia, hendaklah dengan adil …”</p>
                                        </li>
                                        <li>QS. al-Hasyr (59): 18:
                                            <p class="arab18rata">يَا أَيُّهَا الَّذِيْنَ آمَنُوا اتَّقُوا اللهَ
                                                وَلْتَنْظُرْ نَفْسٌ مَّا قَدَّمَتْ لِغَدٍ وَاتَّقُوا اللهَ إِنَّ اللهَ
                                                خَبِيْرٌ بِمَا تَعْمَلُوْنَ.</p>
                                            <p class="terjemah">“Hai orang yang beriman! Bertakwalah kepada Allah dan
                                                hendaklah setiap diri memperhatikan apa yang telah dibuat untuk hari
                                                esok (masa depan). Dan bertakwalah kepada Allah. Sesungguhnya Allah Maha
                                                Mengetahui apa yang kamu kerjakan.”</p>
                                        </li>
                                        <li>QS. Luqman (31): 34:
                                            <p class="arab18rata">إِنَّ اللهَ عِنْدَهُ عِلْمُ السَّاعَةِ وَيُنَزِّلُ
                                                الْغَيْثَ وَيَعْلَمُ مَا فِي الْأَرْحَامِ وَمَا تَدْرِيْ نَفْسٌ مَّاذَا
                                                تَكْسِبُ غَدًا وَمَا تَدْرِيْ نَفْسٌ بِأَيِّ أَرْضٍ تَمُوْتُ إِنَّ اللهَ
                                                عَلِيْمٌ خَبِيْرٌ.</p>
                                            <p class="terjemah">“Sesungguhnya Allah, hanya di sisi-Nya sajalah ilmu
                                                tentang hari Kiamat; dan Dia yang menurunkan hujan, dan mengetahui apa
                                                yang ada dalam rahim. Dan tidak ada seorangpun yang dapat mengetahui
                                                (dengan pasti) apa yang akan dikerjakannya besok. Dan tidak ada
                                                seorangpun yang dapat mengetahui di bumi mana dia akan mati. Sungguh,
                                                Allah Maha Mengetahui dan Maha Mengenal.” </p>
                                        </li>
                                    </ol>
                                </li>
                                <li>Hadis Nabi SAW:
                                    <ol type="a">
                                        <li>Hadis riwayat Abu Dawud dan al-Tirmidzi:
                                            <p class="arab18rata">أَدِّ اْلأمَانَةَ إِلَى مَنِ ائْتَمَنَكَ وَلاَ تَخُنْ
                                                مَنْ خَانَكَ. </p>
                                            <p class="terjemah">“Tunaikanlah amanat itu kepada orang yang memberi amanat
                                                kepadamu dan jangan kamu mengkhianati orang yang mengkhianatimu.”</p>
                                        </li>
                                        <li>Hadis riwayat al-Tirmidzi:
                                            <p class="arab18rata">عَنْ عَمْرٍو بْنِ عَوْفٍ الْمُزَنِيِّ رَضِيَ اللهُ
                                                تَعَالَى عَنْهُ أَنَّ رَسُوْلَ اللهِ صَلّى اللهُ عَلَيْهِ وَسَلَّمَ
                                                قَالَ : الصُّلْحُ جَائِزٌ بَيْنَ الْمُسْلِمِيْنَ إلَّا صُلْحًا حَرَّمَ
                                                حَلَالًا أَوْ أَحَلَّ حَرَامًا. وَالْمُسْلِمُوْنَ عَلَى شُرُوْطِهِمْ،
                                                إلَّا شَرْطًا حَرَّمَ حَلَالًا، أَوْ أَحَلَّ حَرَامًا.</p>
                                            <p class="terjemah">“Dari ‘Amr bin ‘Auf al-Muzani, bahwa Rasulullah SAW
                                                bersabda: Sulh (penyelesaian sengketa melalui musyawarah untuk mufakat)
                                                dapat dilakukan di antara kaum muslimin kecuali sulh yang mengharamkan
                                                yang halal atau menghalalkan yang haram; dan kaum muslimin terikat
                                                dengan syarat-syarat mereka kecuali syarat yang mengharamkan yang halal
                                                atau menghalalkan yang haram.”</p>
                                        </li>
                                        <li>Hadis riwayat Ibnu Majah:
                                            <p class="arab18rata">أَنَّ النَّبِيَّ صَلَّى اللهُ عَلَيْهِ وَآلِهِ
                                                وَسلَّمَ قَالَ: ثَلاَثٌ فِيهِنَّ الْبَرَكَةُ: الْبَيْعُ إِلَى أَجَلٍ
                                                وَالْمُقاَرَضَةُ وَخَلْطُ البُرِّ بِالشَّعِيْرِ لِلْبَيْتِ لاَ
                                                لِلْبَيْعِ.</p>
                                            <p class="terjemah">Sesungguhnya Nabi Muhammad saw. bersabda, “Ada tiga hal
                                                yang mengandung berkah: jual beli secara tidak tunai, muqaradhah, dan
                                                mencampur gandum halus dengan gandum kasar (jewawut) untuk keperluan
                                                rumah tangga, bukan untuk dijual.”</p>
                                        </li>
                                        <li>Hadis riwayat Thabarani:
                                            <p class="arab18rata">كَانَ سَيِّدُنَا الْعَبَّاسُ بْنُ عَبْدِ الْمُطَلِّبِ
                                                إِذَا دَفَعَ الْمَالَ مُضَارَبَةً اِشْتَرَطَ عَلَى صَاحِبِهِ أَنْ لاَ
                                                يَسْلُكَ بِهِ بَحْرًا وَلَا يَنْزِلَ بِهِ وَادِياً وَلَا يَشْتَرِي بِهِ
                                                دَابَّةً ذَاتَ كَبِدٍ رَطْبَةٍ، فإِنْ فَعَلَ ذَلِكَ ضَمِنَ، فَبَلَغَ
                                                شَرْطُهُ رَسُولَ اللهِ صَلَّى اللهُ عَلَيْهِ وَ آلِهِ وسَلَّمَ
                                                فَأَجَازَهُ.</p>
                                            <p class="terjemah">“Abbas bin Abdul Muthallib jika menyerahkan harta
                                                sebagai mudharabah, ia mensyaratkan kepada mudharib-nya agar tidak
                                                mengarungi lautan dan tidak menuruni lembah, serta tidak membeli hewan
                                                ternak. Jika persyaratan itu dilanggar, ia (mudharib) harus menanggung
                                                resikonya. Ketika persyaratan yang ditetapkan Abbas itu didengar
                                                Rasulullah, beliau membenarkannya.”</p>
                                        </li>
                                        <li>Hadis riwayat Muslim:
                                            <p class="arab18rata">مَنْ فَرَّجَ عَنْ مُسْلِمٍ كُرْبَةً مِنْ كُرَبِ
                                                الدُّنْيَا، فَرَّجَ اللهُ عَنْهُ كُرْبَةً مِنْ كُرَبِ يَوْمِ
                                                الْقِيَامَةِ، وَاللهُ فِيْ عَوْنِ الْعَبْدِ مَادَامَ الْعَبْدُ فِيْ
                                                عَوْنِ أَخِيْهِ.</p>
                                            <p class="terjemah">“Orang yang melepaskan seorang muslim dari kesulitannya
                                                di dunia, Allah akan melepaskan kesulitannya di hari kiamat; dan Allah
                                                senantiasa menolong hamba-Nya selama ia (suka) menolong saudaranya.”</p>
                                        </li>
                                        <li>Hadis riwayat al-Syafi’i, al-Daraquthni, dan Ibn Majah:
                                            <p class="arab18rata">لَا يُغْلَقُ الرَّهْنُ مِنْ صَاحِبِهِ الَّذِيْ
                                                رَهَنَهُ، لَهُ غُنْمُهُ وَعَلَيْهِ غُرْمُهُ.</p>
                                            <p class="terjemah">“Tidak terlepas kepemilikan agunan dari pemilik yang
                                                mengagunkannya. Ia memperoleh manfaat dan menanggung risikonya.”</p>
                                        </li>
                                    </ol>
                                </li>
                                <li>Kaidah fikih:
                                    <p class="arab18rata">الأَصْلُ فِي الْمُعَامَلَاتِ الإِبَاحَةُ إِلاَّ أَنْ يَّدُلَّ
                                        دَلِيْلٌ عَلَى تَحْرِيْمِهَا.</p>
                                    <p class="terjemah">“Pada dasarnya, segala bentuk muamalat itu boleh dilakukan
                                        kecuali ada dalil yang mengharamkannya.”</p>
                                    <p class="arab18rata">تَصَرُّفُ الْإمَامِ عَلَى الرَّعِيَةِ مَنُوْطٌ
                                        بِالْمَصْلَحَةِ.</p>
                                    <p class="terjemah">“Tindakan Imam [pemegang otoritas] terhadap rakyat harus
                                        mengikuti mashlahat.”</p>
                                    <p class="arab18rata">اَلْحَاجَةُ قَدْ تَنْزِلُ مَنْزِلَةَ الضَّرُوْرَةِ.</p>
                                    <p class="terjemah">“Keperluan dapat menduduki posisi darurat.”</p>
                                    <p class="arab18rata">الضَّرَرُ يُدْفَعُ بِقَدْرِ الْإِمْكَانِ.</p>
                                    <p class="terjemah">“Segala madharat (bahaya, kerugian) harus dihindarkan sedapat
                                        mungkin."</p>
                                    <p class="arab18rata">اَلضَّرَرُ يُزَالُ.</p>
                                    <p class="terjemah">“Segala madharat (bahaya, kerugian) harus dihilangkan.”</p>
                                    <p class="arab18rata">دَرْءُ الْمَفَاسِدِ مُقَدَّمٌ عَلَى جَلْبِ الْمَصَالِحِ.</p>
                                    <p class="terjemah">“Mencegah mafsadah (kerusakan) harus didahulukan dari mengambil
                                        kemaslahatan.”</p>
                                    <p class="arab18rata">كُلُّ قَرْضٍ جَرَّ مَنْفَعَةً فَهُوَ رِبَا.</p>
                                    <p class="terjemah">“Setiap utang piutang yang mendatangkan manfaat (bagi yang
                                        berpiutang, muqridh) adalah riba.</p>
                                    <p class="arab18rata">مَنْ شَرَطَ عَلَى نَفْسِهِ طَائِعًا غَيْرَ مُكْرَهٍ فَهُوَ
                                        عَلَيْهِ.</p>
                                    <p class="terjemah">“Siapa saja yang membebankan sesuatu kepada dirinya secara
                                        sukarela tanpa paksaan, maka sesuatu itu menjadi kewajibannya.”</p>
                                    <p class="arab18rata"> مَنِ الْتَزَمَ مَعْرُوْفًا لَزِمَهُ.</p>
                                    <p class="terjemah">“Siapa yang berkomitmen melaksanakan suatu kebaikan, maka ia
                                        wajib menunaikannya.”</p>
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>Memperhatikan</td>
                        <td class="titik_dua">:</td>
                        <td>
                            <ol type="1">
                                <li>Pendapat Imam Ahmad:
                                    <p class="arab18rata">عَنْ أَحْمَدَ أَنَّهُ سُئِلَ عَنْ شَرْطِ ضَمَانِ مَا لَا
                                        يَجِبُ ضَمَانُهُ، هَلْ يُصَيِّرُهُ الشَّرْطُ مَضْمُوْنًا؟ فَقَالَ:
                                        اَلْمُسْلِمُوْنَ عَلَى شُرُوْطِهِمْ. وَهَذَا يَدُلُّ عَلَى نَفْيِ الضَّمَانِ
                                        بِشَرْطِهِ وَوُجُوْبِهِ بِشَرْطِهِ، لِقَوْلِهِ صَلَّى اللهُ عَلَيْهِ وَ سَلَّمَ:
                                        اَلْمُسْلِمُوْنَ عَلَى شُرُوْطِهِمْ.</p>
                                    <p class="terjemah">“Dari Ahmad, ia (Ahmad) ditanya tentang syarat menjamin sesuatu
                                        yang tidak wajib menjaminnya, apakah syarat tersebut menjadikannya sebagai
                                        sesuatu yang wajib dijamin? Ahmad menjawab, ‘Umat Islam terikat dengan
                                        syarat-syarat yang mereka buat.’ Jawaban ini menunjukkan bahwa tidak wajib
                                        menjamin karena ada syarat yang tidak mewajibkannya, dan wajib menjamin karena
                                        ada syarat yang mewajibkannya; karena Rasulullah Saw bersabda: ‘umat Islam
                                        terikat dengan syarat-syarat yang mereka buat.’”</p>
                                    <p>(Ibn Qudamah, <em>al-Mughni</em> [8/115]).</p>
                                </li>
                                <li>Pendapat Abu Yusuf:
                                    <p class="arab18rata">ذَهَبَ اَبُوْ يُوْسُفَ وَمُحَمَّدٌ بْنُ الْحَسَنِ إِلَى أَنَّ
                                        الْمُضَارِبَ يَضْمَنُ مَالَ الْمُضَارَبَةِ فِي حَال فَسَادِهَا وَلَوْ لَمْ
                                        يَتَعَدَّ عَلى الْمَالِ اَوْ يُفَرِّطْ فِيْهِ.</p>
                                    <p class="terjemah">“Abu Yusuf dan Muhammad bin Hasan berpendapat bahwa pengelola
                                        (mudharib) bertanggung jawab terhadap modal mudharabah apabila mudharabah
                                        tersebut fasid (rusak), meskipun ia tidak melakukan perbuatan yang melampaui
                                        batas atau melakukan kelalaian atas modal.”</p>
                                    <p>(Ahmad Hafizh Musa Musa, <em>al-Dhaman fi `Uqud al-Amanat fi al-Fiqh al-Islami wa
                                            Tathbiqathuhu al-Mu`ashirah</em> [Yordania: Universitas Yordania. 2005; h.
                                        145; Ibn Abidin, <em>Hasyiyah Ibn Abidin</em> (8/316), dan al-Kasani, <em>Bada`i
                                            al-Shana`i</em> (6/108).</p>
                                </li>
                                <li>Pendapat Imam al-Syaukani tentang mudharib dan pemegang amanah yang lain:
                                    <p class="arab18rata">وَلاَ يُضَمَّنُوْنَ إِلاَّ لِجِنَايَةٍ أَوْ تَفْرِيْطٍ،
                                        وَإِذَا ضَمِنُوْا ضُمِّنُوْا، لِأَنَّهُمْ قَدْ اخْتَارُوْا ذَالِكَ
                                        لِأَنْفُسِهِمْ وَالتَّرَاضِي هُوَ الْمَنَاطُ فِيْ تَحْلِيْلِ أَمْوَالِ
                                        اْلعِبَادِ.</p>
                                    <p class="terjemah">“Mereka (mudharib dan pemegang amanah yang lain) tidak boleh
                                        diminta bertanggung jawab untuk menanggung risiko kecuali (risiko itu terjadi)
                                        akibat pelanggaran atau kelalaian; (namun) jika mereka menanggung risiko (atas
                                        kemauan sendiri), mereka wajib menanggung risiko, hal itu karena mereka dengan
                                        suka rela telah memilih pilihan (menanggung risiko) tersebut. Dan kerelaan
                                        (untuk menanggung risiko) menjadi sebab menghalalkan harta hamba.”</p>
                                    <p>(<em>As-Sail al-Jarrar al -Mutadaffiq ‘ala Hada'iq al-Azhar</em>, Beirut : Dar
                                        al-Kutub al-Ilmiah, 1405 H, 3/217)</p>
                                </li>
                                <li>Ibnu Taimiyah menjelaskan:
                                    <p class="arab18rata">فَأَمَّا اشْتِرَاطُ عَوْدِ مِثْلِ رَأْسِ الْمَالِ (أَيْ فِي
                                        الْمُضَارَبَةِ) فَهُوَ مِثْلُ اشْتِرَاطِ عَوْدِ الشَّجَرِ وَالْأَرْضِ (أَيْ
                                        لِصَاحِبِهِمَا فِي الْمُزَارَعَةِ وَالْمُسَاقَاةِ).
                                    </p>
                                    <p class="terjemah">“Adapun mensyaratkan kembalinya modal (dalam akad mudharabah),
                                        maka hal itu sama dengan mensyaratkan kembalinya pohon dan tanah (kepada
                                        pemiliknya dalam akad muzara’ah dan musaqah)”
                                    </p>
                                    <p>(Ibnu Taimiyah, <em>Majmu’ Fatawa Ibn Taimiyah</em>, 30/105)</p>
                                </li>
                                <li>Pendapat Nazih Hammad:
                                    <p class="arab18rata">لَقَدْ ظَهَرَ لِيْ بَعْدَ عَرْضِ خِلَافِ الْفُقَهَاءِ
                                        وَأَدِلَّتِهِمْ فِي مَسْأَلَةِ تَضْمِيْنِ الْمُضَارِبِ رَأْسَ مَالِ
                                        الْمُضَارَبَةِ بِالشَّرْطِ (فِي حَالَاتِ التَّلَفِ وَالنُّقْصَانِ وَالْخَسَارَةِ
                                        وَغَيْرِهَا)، ثُمَّ مَنَاقَشَتِهَا بِمَوْضُوْعِيَّةٍ وَأَمَانَةٍ عِلْمِيَّةٍ،
                                        بَعِيْدَةٍ عَنِ التَّعَصُّبِ الْمَذْهَبِيِّ أَوِ اتِّبَاعِ الْهَوَاءِ، رَجْحَانُ
                                        الْقَوْلِ بِصِحَّةِ تَضْمِيْنِ الْمُضَارِبِ ذَلِكَ بِالشَّرطِ، نَظَراً
                                        لِوُجُوْدِ كَثِيْرٍ مِنَ الْاِعْتِرَاضَاتِ الْوَجِيْهَةِ عَلَى أَدِلَّةِ
                                        الْمَانِعِيْنَ، وَاعْتِبَارًا لِقُوَّةِ حُجَجِ وَبَرَاهِيْنِ الْمُجِيْزِيْنَ،
                                        وَسَلَامَتِهَا مِنَ الْإِيْرَادَاتِ الْمَقْبُوْلَةِ عَلَيْهَا، حَيْثُ ثَبَتَ
                                        لَنَا أَنَّهُ لَيْسَ فِي الْأَدِلَّةِ الشَّرْعِيَّةِ مَا يَمْنَعُ مِنْ جَوَازِ
                                        ذَلِكَ الْاِشْتِرَاطِ، وَأَنَّ الْقَوْلَ بِصِحَّتِهِ لَا يَقْتَضِي مُخَالَفَةً
                                        لِقَاعِدَةٍ مِنْ قَوَاعِدِ الشَّرْعِ الْمُتَّفَقِ عَلَيْهَا، وَلَا وُقُوْعًا
                                        فِيْ مَحْظُوْرٍ، مِنْ رِبَا أَوْ قِمَارٍ أَوْ بَيْعِ غَرَرٍ، وَلَا جَلْبًا
                                        لِمَفْسَدَةٍ رَاجِحَةٍ. وَهُوَ بِلَا رَيْبٍ خَيْرٌ وَأَوْلَى مِنَ التَّشْدِيْدِ
                                        بِالْمَنْعِ ثُمَ اللُّجُوْءِ إِلَى تَضْمِيْنِ الْمُضَارِبِ عَنْ طَرِيْقِ
                                        الْحِيَلِ... وَاللهُ تَعَالَى أَعْلَمُ. </p>
                                    <p class="terjemah">“Sudah jelas bagiku --setelah memaparkan perbedaan pendapat
                                        ulama berikut dalil-dalil yang digunakannya tentang hukum mensyaratkan pengelola
                                        (mudharib) agar menjamin pengembalian pokok modal mudharabah dalam seluruh
                                        kondisi, baik karena rusak, berkurang, rugi atau karena hal lain, kemudian
                                        mengujinya secara objektif, berdasarkan kejujuran ilmiah, jauh dari sikap
                                        fanatik madzhab atau mengikuti hawa nafsu-- bahwa pendapat yang kuat adalah
                                        pendapat yang menyatakan sahnya syarat agar pengelola (mudharib) menjamin modal;
                                        hal itu karena memperhatikan banyaknya bantahan yang bermutu terhadap
                                        dalil-dalil yang disampaikan oleh ulama yang melarangnya; kuatnya argumen dan
                                        alasan yang disampaikan ulama yang membolehkannya, dan argumen-argumen tersebut
                                        terbebas dari kritikan-kritikan yang dapat diterima. Atas dasar demikian, bagi
                                        kami telah terbukti tidak terdapat dalil syar`i yang melarang adanya syarat
                                        penjaminan modal; pendapat yang membolehkannya ini tidak melanggar ketentuan
                                        syariah (dalam mudharabah) yang disepakati, juga tidak menjerumuskan ke dalam
                                        perbuatan yang dilarang seperti riba, judi, atau jual-beli gharar, serta tidak
                                        mendatangkan kesulitan yang nyata (mafsadah rajihah). <strong>Tidak diragukan
                                            bahwa (pendapat yang membolehkan syarat menjamin modal) ini merupakan
                                            pendapat yang lebih baik dan lebih utama dari pada pendapat yang bersifat
                                            ketat (tasyaddud) melarangnya</strong>, kemudian mencari-cari celah untuk
                                        (membolehkan) pengelola agar menjamin modal dengan berbagai cara hilah … Allah
                                        Maha Mengetahui.”</p>
                                    <p>(Dr. Nazih Hammad, <em>Fi Fiqh al-Mu’amalat al-Maliyah al-Mashrafiyah
                                            al-Mu’ashirah: Qira`ah Jadidah</em>. Damaskus: Dar al-Qalam. 2007, h.
                                        284-285) </p>
                                </li>
                                <li>Pendapat Syeikh Yusuf al-Syubaili:
                                    <p class="arab18rata">فَاِذَا احْتَاجَتْ مُؤَسَّسَةٌ لِلسُّيُوْلَةِ فَإِنَّهَا
                                        تَبِيْعُ أَوْراَقاً كَصُكُوْكٍ إِسْلَامِيَّةٍ أَوْ أَسْهُمٍ بِثَمَنٍ نَقْدِيٍّ،
                                        وَتَنْقُلُ مِلْكِيَّتَهاَ تَامَّةً، بِمَا لَهَا ومَا عَلَيْهَا مِنْ حُقوْقٍ،
                                        بِمَا فِى ذلِكَ قَبْضُ الاَرْبَاحِ وَحُضُوْرُ الْجَمْعِيَّاتِ العُمُوْمِيَّةِ
                                        فِى الاَسْهُمِ وَالتَّصْوِيْتُ والْمُشَارَكَةُ فِى زِيَادَةِ رَأسِ الْمَالِ،
                                        وَتَعْدِيْلُ عَقْدِ التَّأسِيْسِ وَالنِّظَامِ الأَسَاسِيِّ لِلشِّرْكَةِ
                                        مُصْدِرَةِ الأَسْهُمِ، وَكَافَّةُ التَّصَرُّفَاتِ القَانُوْنِيَّةِ النَّاشِئَةِ
                                        عَنْ مِلْكِيَّةِ هَذِهِ الاَوْرَاقِ. وَيَقْتَرِنُ عَقْدُ البَيْعِ بِوَعْدٍ مِنْ
                                        قِبَلِ الْمُشْتَرِيْ بِبَيْعِ هَذِهِ الاَوْرَاقِ لِلْمَالِكِ الاَوَّلِ البَائِعِ
                                        خِلَالَ فَتْرَةٍ مُحَدَّدَةٍ.</p>
                                    <p class="terjemah">“Jika lembaga keuangan perlu likuiditas, maka lembaga tersebut
                                        dapat menjual surat berharga seperti sukuk atau saham secara tunai. Dengan jual
                                        beli ini, maka kepemilikan surat berharga tersebut berpindah (ke tangan pembeli)
                                        secara penuh berikut berbagai akibat hukumnya, seperti mendapatkan keuntungan,
                                        menanggung risiko kerugian, hak menghadiri RUPS (rapat umum pemegang saham), hak
                                        suara, hak dalam penambahan modal, pengubahan akta (anggaran dasar/anggaran
                                        rumah tangga) perusahaan penerbit saham, serta seluruh hak dan perbuatan hukum
                                        lain yang melekat pada surat berharga tersebut sesuai peraturan
                                        perundang-undangan. Transaksi jual ini disertai dengan janji dari pembeli untuk
                                        menjual kembali surat berharga tersebut kepada penjual pertama selama periode
                                        tertentu.”</p>
                                    <p>(Dr. Yusuf bin Abdullah asy-Syubaili’, <em>Adawat Idarat al-Makhathir al-Suyulah
                                            wa Bada’il Ittifaqiyati I`adati al-Syira’ fi al-Mu`assasati al-Maliyah
                                            al-Islamiyah</em>, h.15)</p>
                                </li>
                                <li>Substansi Fatwa Dewan Syari'ah Nasional No:19/DSN-MUI/IV/2001 tentang Al-Qardh;
                                    Fatwa Dewan Syari'ah Nasional No: 07/DSN-MUI/IV/2000 tentang Pembiayaan Mudharabah
                                    (Qiradh); Fatwa Dewan Syariah Nasional No: 105/DSN-MUI/X/2016&nbsp; tentang
                                    Penjaminan Pengembalian Modal Pembiayaan Mudharabah, Musyarakah, dan <em>Wakalah bil
                                        Istitsmar</em>;&nbsp; dan Fatwa Dewan Syariah Nasional No: 94/DSN-MUI/IV/2014
                                    tentang Repo Surat Berharga Syariah (SBS) Berdasarkan Prinsip Syariah.
                                </li>
                                <li>Surat dari Departemen Ekonomi dan Keuangan Syariah Bank Indonesia kepada DSN-MUI No.
                                    18/162/DEKS/Srt/B tanggal 08 Desember 2016 Perihal Permohonan Pernyataan Kesesuaian
                                    Syariah; dan No. 19/4/DEKS/Srt/B tanggal 10 Januari 2017 Perihal Permohonan Fatwa
                                    PLJPS;
                                </li>
                                <li>Pembahasan dalam <em>Focus Group Discussion </em>antara Bank Indonesia dengan BPH
                                    DSN-MUI pada tanggal 6-7 Desember 2016 di Jakarta; 4-6 Januari 2017 di Bogor;&nbsp;
                                    dan 31 Januari 2017 di Jakarta;
                                </li>
                                <li>Pendapat peserta Rapat Pleno DSN-MUI pada hari Jum'at, tanggal 17 Februari 2017 di
                                    &nbsp;Jakarta;
                                </li>
                            </ol>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p class="titel_kotak">MEMUTUSKAN</p>
                <table id="tabel_fatwa" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td>Menetapkan</td>
                        <td class="titik_dua">:</td>
                        <td width="88%"><strong>FATWA TENTANG PEMBIAYAAN LIKUIDITAS JANGKA PENDEK SYARIAH</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Pertama</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Ketentuan Umum</strong><br>Dalam fatwa ini yang dimaksud dengan:
                            <ol>
                                <li> Pembiayaan Likuiditas Jangka Pendek, yang selanjutnya disebut PLJP, adalah pinjaman
                                    jangka pendek dari Bank Indonesia kepada Bank Umum Konvensional untuk mengatasi
                                    kesulitan likuiditas jangka pendek.
                                </li>
                                <li> PLJP Syariah, yang selanjutnya disebut PLJPS, adalah pembiayaan berdasarkan Prinsip
                                    Syariah dari Bank Indonesia kepada Bank Syariah untuk mengatasi kesulitan likuiditas
                                    jangka pendek.
                                </li>
                                <li><em>Muqaradhah</em> <em>bi Dhaman Ra's al-Mal</em> (الْمُقَارَضَةُ بِضَمَانِ رَأْسِ
                                    الْمَالِ) adalah akad PLJPS dalam bentuk pembiayaan dari Bank Indonesia kepada Bank
                                    Syariah untuk digunakan dalam kegiatan operasional usaha dengan berbagi keuntungan
                                    sesuai dengan nisbah disertai agunan, dan Bank Syariah wajib mengembalikan dana
                                    tersebut sesuai dengan komitmen (<em>iltizam)</em>-nyapada waktu yang ditentukan.
                                </li>
                                <li><em>Al-Bai' ma'a al-Wa'd</em> <em>bi al-Syira`</em>&nbsp;(البَيْعُ مَعَ اْلوَعْدِ
                                    بِالشِّرَاءِ) adalah akad PLJPS dalam bentuk pembiayaan dari Bank Indonesia kepada
                                    Bank Syariah dengan cara penjualan surat berharga syariah oleh Bank Syariah kepada
                                    Bank Indonesia, yang wajib dikembalikan berdasarkan pembelian kembali (atas dasar
                                    <em>wa`d</em> sebelumnya) Surat Berharga Syariah oleh Bank Syariah pada waktu yang
                                    ditentukan.
                                </li>
                                <li><em>Al-Tas-hilat bi al-Tautsiq </em>(اَلتَّسْهِيْلَاتُ بِالتَّوْثِيْق) adalah akad
                                    PLJPS dalam bentuk pembiayaan dari Bank Indonesia kepada Bank Syariah yang wajib
                                    dikembalikan oleh Bank Syariah pada waktu yang telah ditentukan &nbsp;disertai
                                    dengan agunan.
                                </li>
                                <li><em>Gharamah Maliyah </em>adalah sanksi berupa sejumlah dana yang ditentukan oleh
                                    Bank Indonesia atas pelanggaran akad yang dilakukan Bank Syariah penerima PLJPS.
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Kedua</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Ketentuan Hukum</strong>
                            <ol>
                                <li> Pemberian PLJPS oleh Bank Indonesia ke Bank Syariah dibolehkan dengan syarat sesuai
                                    dengan prinsip syariah.
                                </li>
                                <li> Pelaksanaan Pembiayaan Likuiditas Jangka Pendek Syariah wajib mengikuti ketentuan
                                    yang terdapat dalam fatwa ini.
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Ketiga</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Akad PLJPS</strong>
                            <p>Akad yang dapat digunakan untuk mendapatkan fasilitas PLJPS adalah akad:</p>
                            <ol>
                                <li><em>Al-Muqaradhah bi Dhaman Ra's al-Mal</em></li>
                                <li><em> Al-Bai' ma'a al-Wa'd bi al-Syira'</em></li>
                                <li><em>Al-Tas-hilat bi al-Tautsiq</em></li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Keempat</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Ketentuan Akad <em>al</em>-<em>Muqaradhah bi Dhaman Ra's al-Mal</em></strong>
                            <ol>
                                <li>Bank Indonesia sebagai penyedia dana memberikan pembiayaan kepada Bank Syariah dan
                                    Bank Syariah berdasarkan komitmen (<em>iltizam)</em>-nyawajib mengembalikan dana
                                    tersebut pada waktu yang ditentukan.
                                </li>
                                <li>Bank Syariah menyerahkan kepada Bank Indonesia agunan yang berkualitas tinggi dan
                                    mudah dicairkan berupa Surat Berharga Syariah dan/atau Aset Pembiayaan.
                                </li>
                                <li>Pembagian hasil dari kegiatan usaha Bank Syariah dinyatakan dalam nisbah.</li>
                                <li>Besaran nisbah dan waktu pembayaran bagi hasil didasarkan pada ketentuan yang
                                    berlaku.
                                </li>
                                <li>Bank Indonesia dapat memberikan batasan khusus kepada Bank Syariah selaku penerima
                                    dana (<em>muqaradhah muqayyadah)</em>.
                                </li>
                                <li>Bank&nbsp; Indonesia dapat mengenakan biaya administrasi (<em>al-taklifat&nbsp;al-
                                        idariyah) </em>atas fasilitas PLJPS.
                                </li>
                                <li>Bank Indonesia dapat meminta kepada Bank Syariah yang mengajukan permohonan PLJPS
                                    untuk:
                                    <ol type="a">
                                        <li>membuat komitmen atau kesanggupan (<em>iltizam</em>) mengembalikan seluruh
                                            dana yang diterimanya, dan
                                        </li>
                                        <li>menyampaikan perkiraan keuntungan pembiayaan yang sedang berjalan selama
                                            masa PLJPS.
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Kelima</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Ketentuan Akad&nbsp; <em>Al-Bai' ma'a al-Wa'd bi al-Syira'</em></strong>
                            <ol>
                                <li>Bank Indonesia sebagai penyedia dana memberikan pembiayaan kepada Bank Syariah
                                    dengan cara membeli Surat Berharga Syariah yang dimiliki Bank Syariah, dan Bank
                                    Syariah menjual Surat Berharga Syariah tersebut kepada Bank Indonesia.
                                </li>
                                <li>Keuntungan atau kerugian serta hak dan akibat hukum lain yang melekat pada SBS
                                    menjadi hak Bank Indonesia sebagai pemilik SBS.
                                </li>
                                <li>Bank&nbsp; Syariah berjanji (<em>wa'd) </em>akan membeli kembali Surat Berharga
                                    Syariah tersebut pada waktu yang ditentukan.
                                </li>
                                <li>Bank Indonesia berjanji <em>(wa'd)</em> akan menjual kembali Surat Berharga Syariah
                                    tersebut pada waktu yang ditentukan.
                                </li>
                                <li>Harga jual beli Surat Berharga Syariah didasarkan pada kesepakatan para pihak atau
                                    ketentuan yang berlaku.
                                </li>
                                <li>Bank&nbsp; Indonesia dapat mengenakan biaya administrasi (<em>al-taklifat
                                        al-idariyah) </em>atas proses fasilitas PLJPS.
                                </li>
                                <li>Besaran biaya dan waktu pembayaran didasarkan pada ketentuan yang berlaku.</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Keenam</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Ketentuan Akad <em>Al-Tas-hilat bi al-Tautsiq</em></strong>
                            <ol>
                                <li>Bank Indonesia sebagai penyedia dana memberikan pembiayaan kepada Bank Syariah dan
                                    Bank Syariah wajib mengembalikan dana tersebut pada waktu yang ditentukan.
                                </li>
                                <li>Atas penerimaan pendanaan tersebut, Bank Syariah menyerahkan kepada Bank Indonesia
                                    agunan yang berkualitas tinggi dan mudah dicairkan berupa Surat Berharga Syariah
                                    <span dir="RTL">&nbsp;</span>dan/atau Aset Pembiayaan.
                                </li>
                                <li>Bank Indonesia tidak boleh mensyaratkan adanya imbalan atas pembiayaan yang
                                    diberikannya.
                                </li>
                                <li>Bank&nbsp; Indonesia dapat mengenakan biaya administrasi (<em>al-taklifat
                                        al-idariyah) </em>atas fasilitas PLJPS.
                                </li>
                                <li>Bank Indonesia dapat mengenakan jasa penatausahaan dan penyimpanan agunan (<em>taklifat
                                        al-idarah wa khadamat al-hifzh).</em>
                                </li>
                                <li>Besaran biaya dan jasa pada angka 4 dan angka 5, serta waktu pembayarannya
                                    didasarkan pada ketentuan yang berlaku.
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Ketujuh</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Ketentuan Khusus Terkait PLJPS</strong>
                            <ol>
                                <li>Bank Indonesia boleh menetapkan syarat-syarat PLJPS kepada Bank Syariah.</li>
                                <li>Dalam hal PLJPS menggunakan akad yang disertai agunan, Bank Indonesia dapat meminta
                                    agunan tambahan.
                                </li>
                                <li>Apabila agunan tidak mencukupi untuk memenuhi kewajibannya, Bank Syariah penerima
                                    PLJPS tetap harus memenuhi kewajiban tersebut secara penuh.
                                </li>
                                <li>Surat Berharga Syariah dan Aset Pembiayaan milik Unit Usaha Syariah dapat digunakan
                                    sebagai agunan oleh Bank Umum Konvensional atas fasilitas PLJP dengan ketentuan
                                    bahwa kedudukannya sebagai alternatif agunan terakhir sesuai klasifikasi aset.
                                </li>
                                <li>Dalam hal Bank Syariah penerima PLJPS tidak melaksanakan kewajibannya, Bank
                                    Indonesia dapat memberikan sanksi berupa <em>gharamah maliyah</em> sesuai ketentuan
                                    yang berlaku.
                                </li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Kedelapan</strong></td>
                        <td class="titik_dua">:</td>
                        <td>
                            <strong>Penutup</strong>
                            <ol>
                                <li>Jika terjadi perselisihan di antara para pihak, maka penyelesaiannya dilakukan
                                    melalui lembaga penyelesaian sengketa berdasarkan syariah setelah tidak tercapai
                                    kesepakatan melalui musyawarah.
                                </li>
                                <li>Fatwa ini berlaku sejak tanggal ditetapkan dengan ketentuan jika di kemudian hari
                                    ternyata terdapat kekeliruan, akan diubah dan disempurnakan sebagaimana mestinya.
                                </li>
                            </ol>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="right" valign="bottom" nowrap="" width="80%">Ditetapkan di</td>
                        <td class="titik_dua" align="center" valign="bottom" nowrap="">:</td>
                        <td align="left" valign="bottom" width="20%"><span style="margin-left: 5px;">Jakarta</span></td>
                    </tr>
                    <tr>
                        <td align="right" style="vertical-align: top;" nowrap="">Tanggal</td>
                        <td class="titik_dua" align="center" valign="middle" nowrap="">:</td>
                        <td align="left" valign="middle" nowrap="">
                            <span style="margin-left: 5px;">20 Jumadil Akhir 1438 H</span>
                            <div style="margin-left: 5px;" class="hr">
                                <hr>
                            </div>
                            <span style="margin-left: 5px;">17 Februari 2017 M</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p class="tengah"><strong>DEWAN SYARI'AH NASIONAL</strong><br>
                    MAJELIS ULAMA INDONESIA</p>
                <div align="center">
                    <table id="td_per_line" class="float-left" width="50%" border="0" align="center" cellspacing="0"
                           cellpadding="0">
                        <tbody>
                        <tr>
                            <td width="50%" align="center" valign="bottom">Ketua<br>
                                <div class="nama">DR. KH. Ma'ruf Amin</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table id="td_per_line" class="float-left" width="50%" border="0" align="center" cellspacing="0"
                           cellpadding="0">
                        <tbody>
                        <tr>
                            <td width="50%" align="center" valign="bottom">Sekretaris<br>
                                <div class="nama">Dr. H. Anwar Abbas, M.M., M.Ag.</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        #tabel_fatwa td {
            text-align: left;
            vertical-align: top;
            padding: 10px;
        }

        .titel_fatwa_kecil {
            text-align: center;
            font-weight: 700;
            font-size: 1.5em;
        }

        .arab18tengah, .tengah {
            text-align: center;
        }

        .arab18rata {
            direction: rtl;
            text-align: justify;
            font-size: 1.5em;
        }

        .titel_kotak {
            font-size: 2em;
            line-height: 1.2;
            margin: 10px 0 8px 0;
            text-align: center;
            font-weight: normal;
        }

        .threeBlocksMoreLink, .tandatangan {
            display: none
        }

        .float-left {
            float: left
        }

        .hr, hr {
            background: #aaa;
            color: #aaa;
            clear: both;
            float: none;
            width: 100%;
            height: 1px;
            margin: 0;
            border: none;
        }

        .titik_dua {
            vertical-align: top;
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
@endsection
