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
 * <p>Java class for bodyType complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="bodyType">
 *   &lt;complexContent>
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType">
 *       &lt;sequence>
 *         &lt;element name="gradelist" type="{}gradelistType"/>
 *       &lt;/sequence>
 *     &lt;/restriction>
 *   &lt;/complexContent>
 * &lt;/complexType>
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "bodyType", propOrder = {
    "gradelist"
})
public class BodyType {

    @XmlElement(required = true)
    protected GradelistType gradelist;

    /**
     * Gets the value of the gradelist property.
     * 
     * @return
     *     possible object is
     *     {@link GradelistType }
     *     
     */
    public GradelistType getGradelist() {
        return gradelist;
    }

    /**
     * Sets the value of the gradelist property.
     * 
     * @param value
     *     allowed object is
     *     {@link GradelistType }
     *     
     */
    public void setGradelist(GradelistType value) {
        this.gradelist = value;
    }

}
