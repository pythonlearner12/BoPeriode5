import './hamburger.css'

export default function Hamburger(props) {
    return <div className="menu" style={props}>
        <input className="menu__check" type="checkbox"/>
        <div className="menu__lines"></div>
        <div className="menu__lines"></div>
        <div className="menu__lines"></div>
    </div>;
}