<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
{{csrf_field()}}
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
    
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.topdrawerlaundry.com/media/1105/top-drawer-laundry-home-page-hero.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><font color="blue">KWIK WASH LAUNDRY</font></h5>
        <p><font color="blue">You Leave It We Clean It!</font></p>
      </div>
    </div>
    
    </div>
  

 
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <b>ABOUT US</b>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         Dry-cleaning and Laundry business is profitable business now-a-days because in today's modern life, no one has got the time to wash and clean their own clothes and apart from these, there are many other reasons that rich people are more prefer to wash and clean their expensive Sarees, Trousers, Skirts, Shirts, Frocks and especially Silk Sarees and Dress materials through the Dry Cleaners only. Laundry work is very well known process of cleaning all types of linens, clothing & carpets etc. Working conditions are not likely to be ideal, but much can be done to overcome drawbacks and inconvenience by orderly arrangement, and sometimes by structural improvements.
        we uses soft and hygienic detergents, fabric softeners, imported chemicals and offer add-ons such as antiseptic wash, conditioner, oxy-bleach, etc. </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <b>Our Vision</b>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Our Vision is to Provide drycleaning and laundry services quicker, efficiently and cost effectively to our clients
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <b>Our Mission</b>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Our Mission is to improve the lives and bring convenience to our clients we serve. To be the most preferred Dry cleaning and Laundry outfit through reliability in the work we do.
      
      </div>
    </div>
  </div>
</div>
<br> <br> <br>

    <h4><center><b><font color="red">PHOTO GALLERY</center></h4>
    <br>
    
    <div class="text-center">
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFRYYGRgaHBoZGhoYHBgaGhoYGBoZGRgYGBgcIS4lHB4rIRgZJjgmKy8xNTVDGiU7QDszPy40NTEBDAwMEA8QHxISHjYrJCs0NDY0NDY2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAgMEBgcBAAj/xABDEAACAQIDBAgCBgkCBgMAAAABAhEAAwQSIQUxQVEGEyJhcYGRsTKhUnKywdHwFCNCYoKSosLhBzMWJEOD0vEVY+L/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAJxEAAgICAgICAwACAwAAAAAAAAECEQMhEjEEQTJhEyJRobEFQnH/2gAMAwEAAhEDEQA/ANgdjuFeVaVXopWB2hHSL4F8aL0H6Q/AKF2TLoYcfrD9Y+9WCKAXP9xvrH3qwUBE5FeilUxeYiNaChzLXctNAmRrXS5nhQAsCuivKaVQAmvV2KavXAqlmYKoEkkwABvJPAUDHK9Wbbb/ANUraMVw9rrAP23JVT9VQJI7zFe2X/qtabS/ZdDztkOPEqYYDwmr/HKroz/JG6s0cGvFahbN2pZxFvrLLrcXmp1B5MN6nuOtTpqGWtnIpJpykRQDPBa850rtcNAHVoH0kwiXLFxLklCjyASNCI3jXjRwUJ2veVEJYSJHZ+lrMfKhdjUXL9V2yof6dIuFR8LcOW61xmCwTuRZGYdmRlbjwo3tdqzB9pPbxOdmYslzMSGOYie0J4yCR3zWhY7GLcRbizldQwnQwROo51eSLTs7PM8NeOo8Xaa/yVXardo0BvGr7gOir3z1l1ils7ojO3eJ0Ud59ONPP0Dw063L38yf+FCkkeZwbM0ar10XP6pPCiidDMCN4d/Fz/YBRHD4Wxhwq2rLngNGaPEuYA76iUotFxi0xeGtltw8+A8TRBMOqj6R/O4VxMRI7QKnkY08xwpu5io0AY8Oypb20FRaNKGsUgB048KivTt4QdTJ76YuOKCQhs74DXLtd2Y0p611xQUIVa41LmkNQA21NRTjUgrSEWXPyFdg869NeitRHAooX0hHYHjRTShfSH4B50IT6ZGvfG31jR3NQG+O23jR5lpBEWpmuOs1xBXmTSgo6V1HdSCNSadmku0UAeJ1FIYtPdSmOopm+5DCgCQKzf8A1M24Y/RkOgg3I4neq+A/O6r3jsV1dt3J+FSfPh84rBNt4tnfOxkuWc+c6+9C7oPVgG81MEV2+8TTC3K6Uzma2EtlbYv4d89m4yNxKnQjkynRh3EGt26D9K1xtoyAt62B1iDcZ3Ov7pg6cN3In55VxWo/6NbMbrL2J1CBBaU8GZirvHPKET+buqZ00XC0zXpFJLim4pQEVjxNLPNcpOcmuNrSbjxoKekIfVe+oWMw4dGB76kWVbjSMwVCx3CSfKp+zWDaaaMD2sh/SnXiHYek1ofQayHwys/aW2zoBzObMJ7gG9qzzbl0PiLjg73JEd5o70B2wwuGyzEpmLhRrLMACYGp0UaDv763yfE9vzlywb+ma60Mo0nx3fOol4qgzOwid7czoBJ3+VR9q47q7D3Zy5FzSdIA7h+daoF/paxzrfJBaMoIDZRE5iuupkDmPM1yNNniXRoL3wOcc4MfKo42pZDZOsTNEwW1gaHfVATpPbywXzACPhbd4Un/AImteX1SB6GlTCzR7eNtsey6k9xBp57i8SPMis0TpDZP7RH88fIxS22xYOmYerD2opgaFdvpGrL5EfKq5icXVafHWAJNzWODswB8N511incZi9AQZEDUcRG+mkSy/dHnzWZ7z71LehPQu5mwwPe32jRe4KoEJikEU5SGpDGmpNOGm6BB7Oa6JrkmlCYrUlHlWhvSH4B5+1EkBg0M6Q/7Y8/al7CXxI949s+NHnOlAb/xnxo+wmkwiJtnQ115jSa6qxSbhMGDrGk0FC5rjOBXgd1eJFACHPaH550ziIzCnn+JfzwNRsUe0KBMEdMw36FeKzIXN5Agn5a1iOI7TjkEA9p+U19COqkQ0FYIYHdlIMz3RWJdKdgfozs9hg9hgCpBDMqneCAZK66NxA8yunZUdqipHDl5Amd/z4+ntRjYGwkdSX37geXOBuoRh9osjypAB7LaAyvEbtD3irds+6jKGTju0I+RpZZyS0XhhBvfZ1ej9sXAvV5RvzZQRHiQRzrasDatpbRbYCoFGRQAAFiRoPGqd0a2Oby53ZlQEqFAEsR+0GM6Dw18tbmiBVCgaKAB4AQKWNy7kPNxTqI5nFcL0g0kmtbOcV1scPnTWcgzp51xgTur1he0AfGkFizcedOXAUK6Q9ebDpZtsztpoVXQgSZYgc6PkUk8ddPKlZpCXFqXZjf/AABj31yIp39tx/bNGOifQPGYW811nw5lcoGa4Y7yMgnwkVpVp1YSDI5gyPUaU3euEbgTrG4nhP3inLI32dOXy8mVVKq+gHjuj128sXbymCGChOwGXVSFLakHUEzEVUtu9AAGBS4WJ3jsIABoAoymN1aRg3LqSyxqQJEGAYmCNxiZ76EbZI6wCB+z84qYut0cco8lV1/4ZwvQYET1rKeIyq0eYImo9/oM3DE+tv8A/dXd0HIegqOyjkPQUm7YK0qspJ6GOu6+vmhH91IfoxdEnrEP8w+41cXQch6VGuqPyTQFsqFzYl76SH+Jv/GpNrCuqBCQSJ4/IGjV1R+Sag3gO/1NUJtsvnQa2Vwyg75b7Ro3doT0Q0wyef2jRS9UstdHRSCKdUaU2aQxtqaBp1qbC0CD0muiYpCLFLR5mq5r0JREdaBoaGbePY9fapeM037jQ7arqbfZPP2/zWKm3lSE/iz2I+M/nhR2aA4j4z5ewo4ra1eV1QQHA1eZjGlJFeG+pjJ3stjmauEjuropFyN8VsI8w1FMvblpPAn2pwncaRcflSvYEHEuFUqBObQzrIOhnurNNq7DNh8yklCTkMyRzQnmPmPOtEu3JJFQsfgxctsnPUHkw+Hy4edTNWi8cuMvozVbCToiz4CauuzujGHNpGYMWKh84Zh8QBgCYgTyqs5IYkiCNDw1G/ThVz2DiR+i2mJEZAJJjcSu/wAqxxbezozXFJoObLRURUUQFGnGeJJ76nvuFUvH7bOZepPwMGLcGI0yj93UjvqyYXadt0DhgBuIJ1Vvonv961jOLfFHPLHJLk/ZLZiJ0pYO/wAqEXtt2xuzN4DT5kU0nSCzOudfFZH9JNab/hlr+hgnXTSvWUOfMeUVFs4lHEowYdxn15edSLB38N/yE1N7LrRzDbRVwSiOQDEwo18zS8Y7C25RczQ2VZAzNEASdBJFRRbCaWxbGs5QWSSe4GKiYrad+3JdLKoDq73MiAHmdTPdFBNiujGGuJaPWILbMZyLBC6Afs6SYnSiyvyI1J9Rp/bQg7Uuuuaytm53B3Un6srDetRxi8ed2Htr4sD/AHigaDvXDsjnMbuG+gG1m/W+ae4qRaGKJBcW1jdlG7wJJoXttSzFGJGeFLKYYSQCR2dCJMUAyJc1IB3QT56R7mk3zu7xPzI+6hexsBcsAo93Oo/25EFUGXQ988tNBzNEMS276v3mgQxa+E88sz36VCutJ8AD5kn8KkWm7J+p+FQrr6nwHu1BI3jmiY7v6o/GoV09me+PlT+PfU/w/wBtQL79j+L7hTQGkdDz/wAon8X2jRd6D9DT/wAonh95osxk0mWh6miKcJpsUhjZpJFKNJJoAOAiKaQ74PH031FS8YPKKcthchgzP4GoSvoLHL8sAJnSaGbWVer04SPlUhwIUFoIEAVCxxBQweJEffSjGsqdmcnoVf8AiPgPsijzCq/f+LyX7Io45YHu0FaZY2kOIvNGlKVprg03mktcAG8eVZ8GirOG62aAJHGnLwOU+FQzioYDv1p6/ilAOvlx1rWO0K0NtiQmRWAzOYAHqT5VHu3iJnjUbDYkXL8xoimCeBPZ+YJ9KTeJZmH0dfI8fzzoQJ2MlzmNO5414bj+edM5Z8fenmQkEd3/AKpsEULpQeqvXCdAR1gPAg7z/NmHlVw6J4ANgrSXV+K2CyneC5z+RE13G7PsYm2ovIrqCCJka8RIIMGNRuPGjmBEAsYA4dwHGs4wSbf9Np5Lil/CibV2c2GfK2qN8DcxyPI01aukGR/g+NF9o4kXS7OJXgvduVQOfH1obtPYV/DqHjOkS0ash4huYH0h51OTC4fsi8OeM/1kEMDg3vglCgjeGaCJ7gDp30rE7CvgTlDfUaT6ECaB4PFsCGRirDcwMHwPMd1GsP0lxC/HkfxXKfVdPlTh5Gv2Jn4zv9egSLjo2ZCysN/AjuI+6rb0f2yL3YeA4B8GEHUd/MUJ2htGxiFl1Nq4PhYjMp/dYqJI8RpVesdYGV7StmBzDKCcpHMjSK1Uoy6Zg4yh2jRrroitceAtsFifAT8oqmYHEJfc4zFsAiz1FtiMqqsS8HSdRLHmO4VP6XYt79i3ZtgL1jK1/UdhRBKzx15fR76zzpphMZcIt27Fw2EgLlAKud4JAO4b9d0nuqlHRHTo1DB9LcPckWmS4F+IIyuwHPIN4/Imj2GxCOiujBkYSrDUEV80/wDw+JsMlxWVLg7SqGBccyQJAGsEE8d2ta30U2k1t0RgAmIXMAPhW6BvQcFdVJjmuurGpca6LTL3caOPufaqttl/1q/WX7Q1qwM9U3pBtOwmJKXy4GRXQpqMwknPGsQvCpWxs5eugMJIGh9xTeIxCGIZT2eY76g4gW0ORlYNG9oLGQCDJ7qi3cFbb4Xy+Kz7VXEjkggphT9X71obeudo+A92rp2Y5ELcEfukCe7KSfao9/Z19ePqik/zdmmohyG8e/aPiv3VCvXOyPE+wp57bk9sLr9cewj50i9hiRClTx4nfHI06CzSuh6xg7Z5qD6mjA31B6PWMmFtKYkIu7w76nsdahloUZpIBpU0mkMQwpJFKak0CH2wrZZmY3xOtewyHKZJBMcO4/jRTrSZgad/GuqDzpca6FRCTDsygNqJ00io217QCaADfRmhW2kAT1+6qiqYpLRAvntfwp9haPpGUa99V6+e0Pqp9haI27hHfurRxtEqVE90B402FAPMUx1/dTb4g8KFBg5JbIGMwLm7nUCO8kRXmtxu9vvp65cY7zSDiSKuMKMpSV2PYNSmdiPiIiI1gHT3oXi77hjkkeInQ/s8RRmy4ZNY58txI3891BMdYkkhZ71iPThWbSTo2j8UB9qbVxCLmVgIMGVUwDuI05+4qA22cQ6w1wwRByhVnzAmu46ycxB0UgiCTMHcYOnI+VBLLlSVO8GK5c3JPTO/AoNbWzQejEPbkkdg5So8NCfEexo3j70WHI+iR69n76pXRXHZL6r+zcGQ+O9D66fxVdNppmsXAPok/wAva+6tsEuSRzeRHi2Uq4wd7doGM91FO6QJDHdu0DVf9nYvrEzDdmdfJWIE+VZpbZUvJc/+1HYwAdYVyY36FjJ1q84PFWsLbyXHUNmc5VlmMsSIUa7orpyK3SOTHL29EfafRG05LW2NpjvAAZCeeTSPIgd1BL/RbEr8D2n+tnQ+zUTxHTITCWjH0nYL/SAWnxioGM6Qu7SrZFG4Dj41x5FCPy7+jvxPLJfr19ogWtl3Uc/pIQBRIVGzZu9iNVUct5mu3NsuOzbwzEfsl2S2vittTPkYNQ8ftC47hAczXGGgaHY7gFAB4T3d1NdJmGGxK27LHKETMt09Z2zJILtJUkZTviTpyp4qd8URmUlXJjxxmJP+46WlO4IuSf8AuZmmol/Zdt9XfOeclzz+Ji3yipGH2racFLqBQfiUiRI5rx5giql0i2XewzLcsXbjWWIlczMUBI3HXMsbj3jfWnZgT8dsiyJIRRG9jv8AU0xgcW6IFBlLJV7ehBEMXKyTqNNBwnvFVw3772z1ztp8KnVidNCnDjr3buZsW+qS3bIgi2SwH0zlzH1Y61S+wejZLV7MoYbiAR4ETWbdP9cV/wBs/YerX0axpfDWWYFWyKCCQSI03gDlVY6XJmxY+pH9L1C12OT0E9sQ1z+FB6KBUdLC8qhdI06w/wAc/Jq411lRO0ZjU8TA41zZvLjF8UYvsI/owNOW0dfhb0JFDsbtNkRGABL85jQCYjxqXe2slu0l1w0PEKsEyRJGpA0rfDO1sKJguzo6Bu+BPqINM3sDhmBMlDviDHrp709axqMguhgEiczEACDBzTuIOlIe+joWRlZTuZSCD4EVuMuOymHVJBkQIO/SKeuHWo+yFiyg7h7U/d31kzddC5rler1IYlqRSiK5QINFxFMLiwJ0OlR1AjjqI+VI6pgGiZ0GvewrVRRm5v0Tv0vuoftXEZkiOBPt+NOWrRBM1FxqQp/PKnxQnJtEa+dV+pb+wtEev0GnKhV86r9S39haILfRQJdBoN7KOXM00S2eZwf2opDOoO8nwpeIuWwuZnQd8igl3b2FSZvoNTuJPHuFaJN9Izk0u2gi9wtuHqaYaSdBPhNSMDb61FdD2WEqSGUsOBAIBg8Dxpd/aC4dGY27hgSWVQygDvDaedDnWkNQtWx2xbcWmzCIOk8BAMxzmh7pO9fSKJY+82RPpEAkMOY1mNOdCXJbfMd0genGsW7dm8dKgfjbHL0kD76rG3LBBFwCODbvJgN/dVtxbpbQu5CIN7MVUDxJrLulHS/MzW8NCoRDvHbed4UtuWOMf5zcOSo2hNxdh3BYjdBgjUEcCNxFWI9IsTH+7/Qmv9NZXh9vFQJBnupx+kZO4H5Vh+DKn+p1PNikrl/ovbY3LrmAI3EKgI8DGlRMRtYcXJ5ydPSqNd2zcbkB61C6y5dYIuZ2YwB3+w8atePN/Jmbz418YmhbOvNiC4tEN1YBczCrmMKJ4kkGAOVKSxeLlMmYj94Rz4jT/NSNh7OGGsouaSxLn998sM5/cRQcs7zrvIqTsu7kTrGOrSzE83MifDMB5UfhiiH5U2Rdl4xEvZriPltsc6wuUsq5lhlIkyRv08poTjcU9+6919Wdpga79AoHHgB4Cp2MuJkeCCXdj4jMYPoBVl6C9Hj1i4i6ogKHtqYMk7nMHSBqJ5g7xpvjioxbOfJOU5KyB0j6Pth7WFJjXsXjvKu5zKQZ4SV/hHOhWytoG274a6wbLLJO/LJkQd4BmD47q1DpNgevsOnEjsnkw1U+RArKdqbGfFKHSUu2lOfeGV8xQCRr+w4MboB3GhJNEvTHMVcsl1KaBWDE9WV+HXLnyxJMCJnWgGOxQu3oU6QqEjm7ANu5QDUkWbjWltOri6WYs+mVFUKq/rGO6EzECZzHQk0Z6M7BVnDJ/s2c03IH628ZDZY0KrMTz0kxNK1HbGwzsrFhVCiIGgiQIG6JJNDtrnPfzdw9j+NS7yZSaiMsma8ny/L/AOsTOUvR1xJ15zUPabQo86nVDxttHAV3KTuIAM90Ej1rzsVzyKzMG7cvwuHX90+1upG2n/UWF/dn+lfxpvbWyLl42zay/q8ysGdUIU5YaWIBAgzGu7Q010lORbX0QGXNwkBdJ7wJ8jyr6ThUdGi6HsW0YBE+k8+pd/wpfRIkWLk7usj+lSfuqPtKRYtKQQY1B4EKJB79ambBMYcTvZmP9v3U4y9Aanswnq0nkPanLh1FIwH+2ngPalXKRv6FueVeAri10mgYk1yutXKAMubpRid3WP8AzH7oqTsjpFfZ3L3XIFm8YLuRK2yykAnfI31crfQPDDeGPmB7CpdnoXhF/wCmD4k113H+nElK+jKrHSHFhgRduEjX4nPyJIq19EtrXL7uLhbsJAzCJ7XPid9XO10Xwq7rSeYn3r2K2ZatJmRFUkwSoAJENoTSk4tDUZJ2yDiG1T6lv7IrNdo9Y+IugI+jvBEnQOYgcq0XFN8H1Lf2aseFsrkQxvVT6gVKdItx5NFFxtl3s2yiM3EiDIMcR3UN6OdE1bFq9602RczlXHYd5EAz3nNG7s+VaotoU05UyBH576bnoI4t2Id9SabZxExr5061uFJjvPlUG5f4Dz5+fKsTc71pJ7QnlvpOItB0InISCAyhcyngy5gRI7wRTK3+1lPrNOZtYosDJtvdDMUzziMS1wA9l2UlIPIZ4T6oj76EP0JZiT16Seax/dW5nvoa+wMM75ihEgjKpKrJjtADcfDTWrUiaZjtzoJfOqPaPdLD00NN3Og2NUSLav8AVYf3Za1a90NYtFvEBF5OhcjwKss0e2d0fFodq87eACD0k+9PkKm/R88Y/o9i7au9yxcRUAJZhpqY7JGjcSY3RrVo6BbECqb9wasOxP0fD972jma25UUGFPrGvjEVV9rW7Z1WA0/sxquozQNPPxpOVpj60V+8pYXHPFcidy6kx4xUvZOyVxCMrMyoCPhiTqYXUEcPkKadoU8hPoP/AFVl2JhTbsIDozDO3i+oHpFZodAfaGyzhlT9FwS4p2MO110GQCIPb01/dA3Ua2LaU4gu11usKZep6wFLcBM5tpALCSozkHfpExQvpVfsDIL2Ju2d5C2ywzDTU5VO7nRrZLnrCCogJo2Zi28iGBXkFMzvJ5VbvjZMa5NL0FNp4hURneYEaDUsxIVUUcWZiFA4kiq9hdkOjdfpnudq/bmVJIgBCYHZUKm4ZgoOh32Z1DQd8GR47p+dMuulRdFtWBH2FhrjFmQ66FCz5CORTNljuiKk4iyiJlUBVAgAAAADcABwofj8Q1pp4VCx+08yQONc/kZ4wg7Zi5NOgdjCCxiozW4p5FrjrXzM5uUm2IiOKCdIGgD6v41YXTSq70hQl0AB7UKO85tQO/UetdfhrlMlLZE29iHXEoEYiEUxJjMWYGRxkAVN21t58NdCoBlyhm3yRLaDWARl0MUN2oc2MXwtj1afvprpOc2JC/UT+Yj/AMq+oLRYtp3rSwt4MwbtaaMOGbN5ngacOUABAFUDsgEnTxO/nPfQTpZiQLwB3BFHqWP3ijfV5VReSqPQAVzzXF2BpuCPYQfuj2pxxrUTB3fhHJRUq49JOzcUK8BXENdDVQzjUmvO9JDikIOV6qSuNx7/APTufxMifYYe1KGHxzbwB9e87fIg108WYfkRdYobte6uQgMpIIMAgniN3nVfXY+JO9rIP1Gb56UjH7OvpbJ64eCpA/qY0cWDmj2Mb4PqJ99HsNte0qIpY5gqggK2+BpMR86pON2iQEQKWYIqlpUajMM3tRfZPR5GRC5dmIky77z3AiqULVszeTjKlsO3tvIPhzTz7BHmM00HxnSHqxnay2Vp7aGVMEg9k7tZqevR/D/QU/Wlvc1zH7NQolpYRGLLAAABKuygcBLR+TUyikrRcZSk6YHHT2wUynOG3SV9JMmhh6S2y05wgHKTJ76peOwpzlQO1myxxzTEetQcThXQwxPMQdIqeKK5M0bD9JrbPLkKBpoZB74Gompx6R4cOCLgIO/Q/hWRNcyiWaBzJp2zdLCVeRzBo4orkzYD0mw53OfQ/fS7fSG3uWayfC27jsEQuzHcATNELmDuJGcOszEk6xoYO40qC2aX/wAQIupOn57qg47pwi6KFJ7zPyGtUnZmzjefIOUkmTlXn8xTO1sELNwpmV9AZXv4EcDpRQ7YbxXSq7dJAfIsEkgbgBrv1rmzsWrKrBnPWDOGcEZgCVkTvggipIwGFu2EVBDoFY5pTrRozozrMZhIB3jhViwGMwuLw6dSi9Woy9XlCm2Y+DKvweI0PA06taJensB7OsNdZgqM6oMzKuhZQdVBOktuAq77QPaqvLgLNkdgMrTOYO2fwDTMabt1Ddr9IMSjZVyPAABZWDHvYqYnyFZ0VaCe1bmJzp1KWSu9muFpBnXKBu0460c2PdYkDTLDQNcxM7zPDfWYYnpPjNw6pfBWPu1P9Gdv37eIS5fcG2wZGEAAZtzaCdCAPM00m/QaTuzXHQHx5jQ/5ph1YcmHofwPypvDbRRwCrDXdqCD4HdT7tpUsor+3AGWDoeR09OflVTC6xVn29iYEVXkSvnvPmnOjGW2LSvXBSM0Gus0151Csh4t8ooJtDaz27qoD2XKqQN8scoPz96nbUuQV7yPeKqu1bmbGovJrfsGr3P+MxO+Qoq2GVxNhr4RkJupAV5IH0wCB8REkjd57q5i9j9ZiFvC4ihWRmRs2eUiAoAghso1JEa90isPrjieT/ZT/FTMHaP6UX11Zwe8QdD3aD0Fe3KUY9loi9JcI74lVCki4UCQDqoEN6ENPLfVuv8AxUJs7auDEGyGi27MpAJHwgwT9LdrP3VMe/qaznTiJsumAxWmcnTd6VOGNUka1RhtEi2qDmT7UymObi1cinTornRodzaCDjTP6aN81m+N2wV3E03hNtu2hNaKVic2y/YjaJ4Gm8LjWM0Ew13MBxNWDZ2Eygk7zViVtltIr0VwHu9q7NdgjsVC2rblCKm5qh7RbsGnG7IlXFlJu4WXGvtV8wKAIvgKpyqc4q4YQ9kVrkVJIywu5NkqKGbasZk0JDwcsEjUdudOIyjXx50RqPieGk6OO7tL+IA865pdHVHsxXGNfFx3uqwl8yuVC5/pZYEGDx7xVNvXrlq8c5LSZO+GB1BA4fkVtOD2fZuNea6paAEVTuUsWzERx00PearGL2CiPkdFYAypO+D4e26p5Id0VDF4BryQoOYdpeR0+HxI3f5pjY+Cvq0ZTlO8cjzFaDhrag6qKK27CAzAmnd7I5voEdHdm3Lb5yNCpU+Bg/dVk2zYR7JVxJGqRvDcI7uBpK422B/g1Exu1kA4nyojTZLm0gbs5Hw751GYEEMu6Rv38DIFAtoLisRea7dAAgqiIsDfO/exAGpPyqyW8eGiRv3edOXGHDeNaqSXohZJIq+J2hdGFNucpBVNB2nRg0gmNMsAd+buoRsjaVzDXBct+DKfhdeKsPv4b6s16yrHdULE7OWKItRD8nIu+HxwxFpb1sHId+h7JHxKxHEVXdsElyZoPsjEmw7D9ltY1gMNxjw+6puKxAYzr8qTas1i7RBuKJ3+9T8Lgs4geNQikmrB0ftgGi6Q6tlXxDYyxdzWncaAQNUIG4Mp0Pjv76texOmt4qFv28p+kslD/CdV8iasIwSsNQKDY/BIh0FcvkSqDa7HJuPQ5tHGdZBFNWzpSbdsUoiDXyuWbnJtk/Z5kmlKuoHP8K7mgVBxGLyMD4+xpYo8pJAwNtbaQS4qQDJEEgEqWOUETu/PKhRt2Xv5yzC4g1URlYgQrEndAIBAmYG7Wo+0Ze+jcip9DNScPhc1wtxJ+6K+mxyjhxpIaHcLgz1rONQSWn6w3eU0QCBDm8fnRPC4AKk0D2ld7RFcssspSsbdIFoIvZ+Ux4tI++ieGcsaHos0QwlqDNdMZyktmbZNuAAVBvPrT2IuRUJjWUtMaIOJbXWlbKsM7iBXr9qWjnV26KYBVA0E761hJeylGw5sXZORQSKOZQKg4jaIURQXEbeE8auWWKNFUT//2Q==" width="350" height="300" class="rounded float-start" alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxlk3Bpcp2630xkfMnSNW74fLAcSXgbpq3Ew&usqp=CAU" width="450" height="300" class="rounded float-end" alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJMukufksflvDduFRoD2kseLZ_BjnRV1zrGk6dA6iUarbegZvO-YYxbHLQGGRjAWuCsMg&usqp=CAU"width="370" height="300"class="rounded" alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTrQp_n8F19VoM09jfsQsY2l--RL1uUg1JlwlJgAPwTu4n_ydPWqYHZE3jm2fdzOA0MB8&usqp=CAU" width="350" height="300" class="rounded " alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZwq1Hh2fdu8MdiKb84p6RwkMcWdiWfexlvQ&usqp=CAU" width="370" height="300" class="rounded float-end" alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz75YGbpktDfaN2h-R3i5obf7f83ygvBbvFw&usqp=CAU" width="350" height="300" class="rounded float-end" alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUMswhFS9W31A8lbjbPWrcaPJYE11bt0gH2A&usqp=CAU"width="360" height="300" class="rounded float-start" alt="..."><br>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXR6C3i6thq-9xdNA6wKmeDrfKXGa_3cg33Xz4sf3ftV48BNxIcnLt26-cTNf9A5TXJfI&usqp=CAU"width="480" height="300" class="rounded float-end" alt="...">

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnCUVUpv-aY5J7G2dcCY5J9ISlXeR9-MCPEg&usqp=CAU"width="500" height="300" class="rounded float-end" alt="...">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVCZTSuC4w7mRLSe1yKFZ7eN1F-8QjKE3F5g&usqp=CAU"width="490" height="300" class="rounded float-end" alt="...">
<br>

</div>
</div>
</div>


</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>   
</body>
</html>