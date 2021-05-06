<!DOCTYPE html>
<html lang="en">

<head>
  <title>DogSpot</title>
  <?php include "includes/head.php" ?>
</head>

<body>
  <header>
    <?php include "includes/nav.php" ?>
  </header>

  <main class="container-fluid my-4">
    <section class="d-flex flex-column justify-content-center align-items-center">
      <div class="row justify-content-center">
        <div class="col-sm-4">
          <a href="chihuahua.php">
            <div class="card border-0">
              <img src="https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/27134537/Longhaired-Chihuahua-running-in-the-grass.jpg" alt="chiuahua" class="card-img" />
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h3>Chihuahua</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="cairn-terrier.php">
            <div class="card border-0">
              <img src="https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/12164822/Cairn-Terrier-sitting-in-the-grass.jpg" alt="cairn terrier" class="card-img" />
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h3>Cairn Terrier</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row pt-4 justify-content-center">
        <div class="col-sm-4">
          <a href="samoyed.php">
            <div class="card border-0">
              <img src="https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/20122208/Samoyed-standing-in-the-forest.jpg" alt="samoyed" class="card-img" />
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h3>Samoyed</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="german-shepherd.php">
            <div class="card border-0">
              <img src="https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/22170353/German-Shepherd-Dog-running.jpg" alt="german shepherd" class="card-img" />
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h3>German Shepherd</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php include "includes/footer.php" ?>
</body>

</html>