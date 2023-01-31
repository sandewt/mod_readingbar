(function () {
  'use strict';

  /**
   * @copyright   (C) 2023 JG Sanders. All rights reserved.
   * @license     GNU General Public License version 2 or later; see LICENSE.txt
   */  
  window.addEventListener('scroll', readingBarScroll);

  function readingBarScroll() {
    var scrolled = document.documentElement.scrollTop;
    var height   = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (scrolled / height) * 100;
    document.getElementById("readingbar").style.width = scrolled + "%";
 };

})();
