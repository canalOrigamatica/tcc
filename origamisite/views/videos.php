<?php
    include('../models/factory.php');

    #public function ListaVideos($variable){
        #echo "<table>";
        #foreach ($variable as $key => $value) {
            # code...
        #    echo "<tr>";
        #    echo "<td>".$value['id']."</td>";
        #    echo "<td>".$value['Nome']."</td>";
        #    echo "<td>".$value['Descricao']."</td>";
        #    echo "<td>".$value['url']."</td>";
        #    echo "</tr>";
        #}
        #echo "</table>";
    #}
        $novoConexao= new Factory();

        #$novoConexao->BuscaVideo();
        $resultado= $novoConexao->BuscaVideo();

        while($row = $resultado->fetch_assoc()) {
           # $frame= "<iframe width=""300"" height=""250"" src=""https://www.youtube.com/embed/""".$row['url']."" "frameborder=""0" "allow=""accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" "allowfullscreen ></iframe>";
            $url= "https://www.youtube.com/embed/".$row['url'];
           echo "<div>
                <div > 
                    <div>";
                    echo "<iframe width='590' height='335' src='"
                            .$url."'"; echo "frameborder='0' allowfullscreen> </iframe>";
                       
                         #<a href="{{ course.get_absolute_url }}">
                         #"<img src=""https://i.ytimg.com/vi/""" . $row['id']. "alt= ""/>
            echo  "</div>
                </div>
            </div>";


           echo "<div>
                <div > 
                    <div>"
                         .$row['Descricao'].
                        # <a href="{{ course.get_absolute_url }}">
                        #<img src="{{ course.image.url }}" alt="{{ course.name }}" />
             
                         #<img src="{% static 'admin/img/django.png' %}" alt="{{ course.name }}" /> 
                        #</a>
                    "</div>
                </div>
            </div>";

         #  echo "<div class="pure-u-2-3">
          #      <div class="l-box">";
           #         echo $row['Descricao'];
                    #<h4 class="content-subhead"><a href="{{ course.get_absolute_url }}" title="">{{ course.name }}</a></h4>
           # echo "    </div>
            #</div>
        #</div>";

        #<div class="pure-g-r content-ribbon">
         #   <div class="pure-u-1">
        #        <div class="l-box">
         #           <p>Nenhum curso está disponível na plataforma</p>
         #       </div>
         #   </div>
       # </div>
        }//endwhile
        
    
?>