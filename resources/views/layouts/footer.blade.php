<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
ul {
  list-style: none;
}
footer {
  padding: 2rem 4rem;
  background: #1a1a1a;
  color: #ccc;
}
.footer {
  display: grid;
  grid-template-columns: 1fr 2fr 1fr;
  justify-content: center;
  gap: 2rem;
}
.footer_about {
  /*   background:red; */
}
h3 {
  font-weight: bold;
  margin-bottom: 1rem;
}
.footer_about p {
  font-size: 0.85rem;
}

.footer_main {
  /*   background:orange; */
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.footer_main ul {
  padding-left: 1rem;
  line-height: 1.5;
}
.footer_right {
  /*   background:blue; */
}

.footer_right .footer_links {
  /*   background:gold; */
  padding: 1.2rem;
  display: flex;
  gap: 10px;
}
.footer_right .footer_links i {
  width: 40px;
  height: 40px;
  background: white;
  border-radius: 50%;
}

.copyright {
  margin-top: 2rem;
  text-align: center;
  padding: 1rem 0 0 0;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
}

@media screen and (max-width: 700px) {
  .footer {
    grid-template-column: 1fr;
  }
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<footer>
    <div class="footer">
      <div class="footer_about">
        <h3>Venue</h3>

        <p>Cultural Conference Center of Heraklion
            N. Plastira Avenue 49, Heraklion, 71201 Greece</p>
      </div>
      <div class="footer_main">
        <h3>Contact person</h3>
        <ul>
            <li>Nektarios Chrysoulakis</li>
            <li>zedd2@iacm.forth.gr</li>
            <li>+30 2810-391-762</li>
            <li>+30 6932-929-775</li>
           </ul>
      </div>
      <div class="footer_right">
        <div class="footer_links">
          <a href=""><i class="bi bi-facebook"></i></a>
          <i class="fas fa-twitter"></i>
          <i class="fas fa-telegram"></i>
          <i class="fas fa-pintrest"></i>
        </div>
      </div>
    </div>
    <div class="copyright">
        © Copyright 2025: Remote Sensing Laboratory, Foundation for Research and Technology - Hellas (FORTH)
    </div>
  </footer>
