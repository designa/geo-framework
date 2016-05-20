<?php include('head.php'); ?>
<body>
  <div class="geo-framework">
    <?php include('nav.php'); ?>
    <main class="geo-framework__content">
      <?php include('header.php'); ?>

      <div class="geo-content">
        <div class="geo-content__row geo-row--title">
          <h1>Toggles</h1>
        </div>
        <div class="geo-content__row">
          <h2>Switcher</h2>
          <label class="geo-switch">
            <span class="geo-switch--label">Mudar</span>
            <input type="checkbox">
            <div class="geo-switch--checkbox">
              <span class="geo-switch--status"></span>
            </div>
          </label>
          <br><br>
          <label class="geo-switch">
            <span class="geo-switch--label">Mudar</span>
            <input type="checkbox" checked>
            <div class="geo-switch--checkbox">
              <span class="geo-switch--status"></span>
            </div>
          </label>
        </div>
        <div class="geo-content__row">
          <h2>Checkbox</h2>
          <div class="geo-toggle">
            <input id="test" type="checkbox" name="checkbox" value="value">
            <label for="test"><span>Text</span></label>
          </div>

          <div class="geo-toggle">
            <input type="checkbox" name="checkbox" value="value">
            <span>Text</span>
          </div>

          <div class="geo-toggle">
            <input type="checkbox" name="checkbox" value="value">
            <span>Text</span>
          </div>
        </div>
        <div class="geo-content__row">
          <h2>Radio</h2>
          <div class="geo-toggle">
            <input type="radio" name="checkbox" value="value">
            <span>Text</span>
          </div>

          <div class="geo-toggle">
            <input type="radio" name="checkbox" value="value">
            <span>Text</span>
          </div>

          <div class="geo-toggle">
            <input type="radio" name="checkbox" value="value">
            <span>Text</span>
          </div>
        </div>
      </div>
      </div>
    </main>
  </div>
</body>