# Resektionstype - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Resektionstype**

## ValueSet: Resektionstype (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Resektionstype | *Version*:2.14.0 |
| Active as of 2022-06-08 | *Computable Name*:Resektionstype |

 
Resektionstype for kræft databaser (DEGC) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "Resektionstype",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Resektionstype",
  "version" : "2.14.0",
  "name" : "Resektionstype",
  "title" : "Resektionstype",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-08T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Resektionstype for kræft databaser (DEGC)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ResectionType",
        "concept" : [
          {
            "code" : "gastrectomy",
            "display" : "Gastrektomi og øsofagojejunostomi (Roux) [KJDD00]"
          },
          {
            "code" : "ventricular",
            "display" : "Ventrikelresektion med gastrojejunostomi [KJDC20/KJCD30]"
          },
          {
            "code" : "transthoracic_ventricular",
            "display" : "Transtorakal øsofagustresektion og ventrikelresektion med øsofagogastrostomi [KJCC10/KJCC11]"
          },
          {
            "code" : "transhiatal_ventricular",
            "display" : "Transhiatal øsofagusresektion og ventrikelresektion med øsofagogastrostomi [KJCC00/KJDC40]"
          },
          {
            "code" : "transthoracic_intestine",
            "display" : "Transtorakal øsofagusresektion med interposition af tarm [KJCC30]"
          },
          {
            "code" : "transhiatal_intestine",
            "display" : "Transhiatal øsofagusresektion med interposition af tarm [KJCC20]"
          },
          {
            "code" : "endoscopic",
            "display" : "Endoskopisk [KJCA52/KJCA52A/KJCA52B/KJCA52C]"
          },
          {
            "code" : "otheresophagus",
            "display" : "Anden resektion af øsofagus med rekonstruktion med frit transplantat"
          },
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
