export default function openMenu() {
  const menuHamb = document.querySelector('[data-menu="button"]');
  const menu = document.querySelector('[data-menu="menu"]');
  const subMenuToggle = document.querySelector('.menu-item-40 > a');
  const subMenu = document.querySelector('.sub-menu');

  if (!menuHamb || !menu) return null;

  menuHamb.addEventListener('click', e => {
    e.preventDefault();

    menu.classList.toggle('ativo');
    menuHamb.classList.toggle('ativo');
  });

  subMenuToggle.addEventListener('click', e => {
    e.preventDefault();

    subMenu.classList.toggle('ativo');
  });
}
