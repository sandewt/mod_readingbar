(function () {
  'use strict';

  /**
   * @copyright   (C) 2023 JG Sanders. All rights reserved.
   * @license     @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
   */  
  window.addEventListener('scroll', readingBarScroll);

  function readingBarScroll() {
    var scroll  = document.documentElement.scrollTop;
    var height  = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var percent = (scroll / height) * 100;
    document.getElementById("readingbar").style.width = percent + "%";
 };

})();
