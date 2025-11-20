# EHS ventral hernie - samlet - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHS ventral hernie - samlet**

## ValueSet: EHS ventral hernie - samlet (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieSamlet | *Version*:2.14.1 |
| Active as of 2023-07-06 | *Computable Name*:EHSVentralHernieSamlet |

 
EHS ventral hernie - lateral fordelt på højre/venstre og kombineret med midtlinje 

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
  "id" : "EHSVentralHernieSamlet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieSamlet",
  "version" : "2.14.1",
  "name" : "EHSVentralHernieSamlet",
  "title" : "EHS ventral hernie - samlet",
  "status" : "active",
  "experimental" : true,
  "date" : "2023-07-06T00:00:00+02:00",
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
  "description" : "EHS ventral hernie - lateral fordelt på højre/venstre og kombineret med midtlinje",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassification",
        "concept" : [
          {
            "code" : "l1r",
            "display" : "L1 subcostal (Højre)"
          },
          {
            "code" : "l2r",
            "display" : "L2 flanke (Højre)"
          },
          {
            "code" : "l3r",
            "display" : "L3 fossa iliaca (Højre)"
          },
          {
            "code" : "l4r",
            "display" : "L4 lumbal (Højre)"
          },
          {
            "code" : "m1",
            "display" : "M1 subxiphoidal"
          },
          {
            "code" : "m2",
            "display" : "M2 epigastrielt"
          },
          {
            "code" : "m3",
            "display" : "M3 umbilikalt"
          },
          {
            "code" : "m4",
            "display" : "M4 infraumbilikalt"
          },
          {
            "code" : "m5",
            "display" : "M5 suprapubisk"
          },
          {
            "code" : "l1l",
            "display" : "L1 subcostal (Venstre)"
          },
          {
            "code" : "l2l",
            "display" : "L2 flanke (Venstre)"
          },
          {
            "code" : "l3l",
            "display" : "L3 fossa iliaca (Venstre)"
          },
          {
            "code" : "l4l",
            "display" : "L4 lumbal (Venstre)"
          }
        ]
      }
    ]
  }
}

```
