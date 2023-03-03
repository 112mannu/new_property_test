<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <style>

.box {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #aaa;
    margin: 20px 0;
    padding: 10px;
    width: 100%;
    min-height: 200px;
    border: 2px #ccc solid;
    color: #fff;
  }
  ._my_input_1{
    border: none;
    width: 100%;
    border: 1px #aaa solid;
    padding: 2px 10px;
    border-radius: 5px;
  }
    </style>

</head>



<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
                <div class="bg-white shadow-md rounded my-6 p-5">


                    <form method="POST" action="">
                        @csrf



        <div class="container text-center">
            <h4>'प्रपत्र- 'ख'</h4>
            <h4><b>(नियम-2 देखिये)</b></h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mt-4">
                    <p>भवन के कारपेट एरिया या भूमि के क्षेत्र के सम्बन्ध में सूचना प्रदान करने के लिये</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-1">
                    <p>क.</p>

                </div>

                <div class="col-xs-12 col-sm-11">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(एक) स्वामी/अध्यासी का नाम</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" name="name_of_owner" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(दो) स्वामी/अध्यासी के पिता</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" name="father_of_owner" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(तीन) भवन/मकान/ भूखण्ड संख्या</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" name="plot_number" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(चार) भवन भूखण्ड की अवस्थिति का पता</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" name="address_of_building" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(पांच) स्वामी अध्यासी का अस्थायी पता. (छ) स्वामी/ अध्यासी का स्थायी पता..</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" name="address_of_owner" class="_my_input_1">
                            </div>
                        </div>

                    </div>




                </div>
                <div class="col-xs-12 col-sm-1">
                    <p>ख.</p>

                </div>

                <div class="col-xs-12 col-sm-11">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>निम्नलिखित का भवन सम्बन्धी ब्यौरा</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <!-- <input type="text" class="_my_input_1"> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(एक) समस्त कमरों और आच्छादित बरामदों का आन्तरिक आयाम (वर्ग फुट में)</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(दो) समस्त बालकनी, कॉग्रेडर, रसोई और भण्डार गृह का आन्तरिक आयाम (वर्ग फुट में)</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(तीन) समस्त मैराज का आन्तरिक आयाम (वर्ग फुट में).</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" class="_my_input_1">
                            </div>
                        </div>


                    </div>




                </div>

            </div>
        </div>
        <div class="container">
            <p>टिप्पणी स्नानागृह, शौचालय, पोर्टिको और जीने द्वारा आच्छादित क्षेत्र का कारपेट एरिया का भाग नहीं होगा।</p>
            <div class="row">

                <div class="col-xs-12 col-sm-6">
                    <div>
                        <p>ग. भवन का कारपेट एरिया</P>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 mt-3">
                    <div>
                        <p>= (एक) +12 ख (दो) 14 ख (तीन)</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">


                <div class="col-xs-12 col-sm-1">
                    <p>घ.</p>

                </div>

                <div class="col-xs-12 col-sm-11">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p>(एक) भूमि का क्षेत्रफल जिस पर भवन निर्मित है (वर्ग फुट में)</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" class="_my_input_1">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <p> (दो) भूमि का क्षेत्रफल यदि उस पर कोई भवन निर्मित न हो (वर्ग फुट में)</P>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div>
                                <input type="text" class="_my_input_1">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="container mt-4 pt-2">
            <div class="row">
                        <div class="col-xs-12 col-sm-6">
 <label for="sel1">ड़. (क) भवन अपस्थित है</label>
                        </div>
                        <div class="col-xs-12 col-sm-6">    
  <select class="form-control" id="sel1">
    <option>1) 24 मीटर से अधिक चौड़ाई वाले मार्ग पर</option>
    <option>2) 12 मीटर से 24 मीटर तक की चौड़ाई वाले मार्ग पर</option>
    <option>3) 12 मीटर से कम चौड़ाई वाले मार्ग पर</option>
  </select>
                        </div>
</div>




<div class="container mt-4 pt-2">
            <div class="row">
                        <div class="col-xs-12 col-sm-6">
 <label for="sel1"> च. भवन के निर्माण की प्रकृति</label>
                        </div>
                        <div class="col-xs-12 col-sm-6">    
  <select class="form-control" id="sel1">
    <option>1) पक्का भवन, आर.सी.सी., छत पा. आर.बी. छत सहित</option>
    <option>2) अन्य पक्का भवन</option>
    <option>3) कच्चा भवन अर्थात् समस्त अन्य भवन जी (एक) और (दो) में आच्छादित नहीं है।</option>
  </select>
                        </div>
</div>

               
            </div>
        </div>

        <div class="container mt-4 pt-2">
            <div class="row">
                        <div class="col-xs-12 col-sm-6">
 <label for="sel1">  छ. भूमि (यदि भूमि पर कोई भवन निर्मित नहीं है) अवस्थित है</label>
                        </div>
                        <div class="col-xs-12 col-sm-6">    
  <select class="form-control" id="sel1">
    <option>(1) 24 मीटर से अधिक चौड़ाई वाले मार्ग पर </option>
    <option>(2) 12 मीटर से 24 मीटर तक को चौड़ाई वाले मार्ग पर</option>

  </select>
                        </div>
</div>

               
            </div>
        </div>
        

        <div class="container mt-4 pt-2">
            <div class="row">


          

            
<!-- 
                <div class="col-xs-12 col-sm-6">
                    <div>
                        <div class="dropdown" >
                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                                छ. भूमि (यदि भूमि पर कोई भवन निर्मित नहीं है) अवस्थित है
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">(1) 24 मीटर से अधिक चौड़ाई वाले मार्ग पर </a>
                                <a class="dropdown-item" href="#">(2) 12 मीटर से 24 मीटर तक को चौड़ाई वाले मार्ग पर</a>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>


                    </form>



        </div>
        </main>
    </div>
    </div>
</x-app-layout>