//
// This file was generated by the JavaTM Architecture for XML Binding(JAXB) Reference Implementation, v2.2.8-b130911.1802 
// See <a href="http://java.sun.com/xml/jaxb">http://java.sun.com/xml/jaxb</a> 
// Any modifications to this file will be lost upon recompilation of the source schema. 
// Generated on: 2014.05.28 at 06:59:48 PM BOT 
//


package schemaClasses;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Java class for groupType complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="groupType">
 *   &lt;complexContent>
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType">
 *       &lt;sequence>
 *         &lt;element name="normal" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *         &lt;element name="me" type="{http://www.w3.org/2001/XMLSchema}string"/>
 *       &lt;/sequence>
 *     &lt;/restriction>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "groupType", propOrder = {
    "normal",
    "me"
})
public class GroupType {

    @XmlElement(required = true)
    protected String normal;
    @XmlElement(required = true)
    protected String me;

    /**
     * Gets the value of the normal property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getNormal() {
        return normal;
    }

    /**
     * Sets the value of the normal property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setNormal(String value) {
        this.normal = value;
    }

    /**
     * Gets the value of the me property.
     * 
     * @return
     *     possible object is
     *     {@link String }
     *     
     */
    public String getMe() {
        return me;
    }

    /**
     * Sets the value of the me property.
     * 
     * @param value
     *     allowed object is
     *     {@link String }
     *     
     */
    public void setMe(String value) {
        this.me = value;
    }

}
