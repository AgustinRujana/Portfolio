
//I create the css fore the animations with this function
const returnCss = (svgName) => {
    const titlePath = document.querySelectorAll(svgName)
    let cssStyles = ""
    for(let i=0; i<titlePath.length; i++) {
        cssStyles = cssStyles.concat(
         `${svgName}:nth-child(${i + 1}){
            stroke-dasharray: ${Math.round(titlePath[i].getTotalLength() + 0.5)};
            stroke-dashoffset: ${Math.round(titlePath[i].getTotalLength() + 0.5)};
            animation: line-anim 2s ease forwards ${i/10}s;
        }
        `)
    }
    return cssStyles
}

