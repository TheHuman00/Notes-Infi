<?php 
$pagetitre = "Horaires - Infinotes";
require_once('./includes/function.php');
require_once('./includes/sql.php');
if($_GET['cursus'] == 'Selectionner le cursus' || $_GET['groupe'] == 'Selectionner votre groupe') {
redirect("prehoraires.php");
}
$cursus = $_GET["cursus"];
$groupe = $_GET["groupe"];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Horaire - Infinotes</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href='fullcalendar/main.css' rel='stylesheet' />
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
        <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>
        <script src='fullcalendar/main.js'></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'title',
                center: 'timeGridSansWE,timeGridAvecWE',
                end: 'prev,next'
            },
            titleFormat: {
                month: 'short', 
                day: 'numeric'
            },
            views: {
                timeGridAvecWE: {
                type: 'timeGridWeek',
                buttonText: 'Avec WE',
                weekends: true
                },
                timeGridSansWE: {
                type: 'timeGridWeek',
                buttonText: 'Sans WE',
                weekends: false
                }
            },
            firstDay: '1',
            initialView: 'timeGridSansWE',
            allDaySlot: false,
            height: 800,
            slotMinTime: '7:00:00',
            slotMaxTime: '21:00:00',
            events: 'loadhoraire.php?cursus=<?php echo $cursus;?>&groupe=<?php echo $groupe; ?>',
            eventClick: function(info) {
            var timestart = new Date(info.event.start);
            var eventstarthour = timestart.getHours();
            var eventstartmin = timestart.getMinutes();
            if(eventstartmin == 0){
                eventstartmin2 = "00";
            }else{
                eventstartmin2 = eventstartmin;
            }
            var timeend = new Date(info.event.end);
            var eventendhour = timeend.getHours();
            var eventendmin = timeend.getMinutes();
            if(eventendmin == 0){
                eventendmin2 = "00";
            }else{
                eventendmin2 = eventendmin;
            }
            eventtile = info.event.title
            eventarray = eventtile.split("Local :");
                Swal.fire({
                    title: eventarray[0],
                    html: `<h3>Local : ${eventarray[1]} <h3> <h4>${eventstarthour}:${eventstartmin2} - ${eventendhour}:${eventendmin2}</h4>`,
                    showConfirmButton: true,
                    confirmButtonColor: '#007bff'
                })
                info.el.style.borderColor = 'red';
            }

            });
            
            calendar.setOption('locale', 'fr');
            calendar.render();

        });

        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NNEJVT4QH"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7NNEJVT4QH');
        </script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a href="index.php">
                    <img class="navbar-brand" src="https://i.imgur.com/zFgMzke.png" height="50" wight="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="prehoraires.php">Horaire</a></li>
                            <li class="nav-item"><a class="nav-link" href="notes.php">Notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="propofile.php">Ajouter ses notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">A propos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="py-3">
                <div class="container">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Horaire MAJ 3 octobre</h1>
                        <p class="lead fw-normal text-muted mb-0">Cliquez sur les cours pour plus d'info<br><?php echo $_GET["cursus"]; ?> Groupe : <?php echo $_GET["groupe"]; ?></p>
                        <div id='calendar'></div>
                    </div>
                    <div id='calendar'></div>
                    <div class="row gx-5">
                </div>
            </section>
        </main>
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; tout est en open source gros (va voir les crédits)</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Rejoindre notre discord</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="./credits.php">Crédits</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="http://www.datejs.com/build/date.js" type="text/javascript"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
