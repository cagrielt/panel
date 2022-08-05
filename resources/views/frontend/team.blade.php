@include('frontend.layouts.header')

<body>
  <div class="container">
    <div class="row col-md-12">
      <h1 class="team-title pt-3">Team</h1>
      <span class="desc">
        Our team comprises dedicated and self-motivated experts and students from high-ranked colleges with different backgrounds including Molecular Biology, Genetics, Biotechnology, and Medicine. 

      </span>
    </div>
  </div>


  <div class="container pt-5 bottom-space">
    <div class="row">
      <div class="col-md-3">
        <img src="{{url('/img/frontend/user/devrim-gozuacik-team.png')}}" height="368" width="362">
      </div>
      <div class="col-md-9 bg-gray">
        <div class="row ml-4">
          <h1 class="title team-detail-title mt-4">Devrim Gözüaçık
            <br><span style="color:#47A5DC;">MD, PHD</span>
          </h1>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="team-desc">
              Koç University School of Medicine faculty member Professor Dr Devrim Gozuacik was born in 1971. He graduated from Izmir Saint-Joseph French College (1986) and Izmir Atatürk High School (1989) with honors. Graduated from Hacettepe English Faculty of Medicine (1995) with the title of medical doctor (MD). Gözüçık worked on Genetic Diseases at Hacettepe Children's Hospital (1990-1995), and on blood cancer (leukemia) at the Netherlands Erasmus University Hospital Cancer Center (1994). He received his MSc in Biochemistry from Paris Ecole Polytechnique (1997) and his PhD in Molecular Biology and Cancer Biology from Paris Pasteur Institute and Paris-Sud University (2001). He did his postdoctoral research at the Weizmann Institute of Science (2001-2006). He started his lab at Sabancı University (SU) in Turkey and became a professo  at Molecular Biology Genetics and Bioengineering Program (2006-2020). He specializes in molecular medicine research, especially in cancer, degenerative disease mechanisms and programmed cell death. He has been continuing his scientific and academic studies at Koç University since 2020.
      <br><a  class="under-line-a" href="/biography.html">Hakkında daha fazlası...</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('frontend.layouts.footer')
