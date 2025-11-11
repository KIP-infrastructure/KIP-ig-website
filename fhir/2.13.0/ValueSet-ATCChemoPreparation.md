# ATC: Præparater for kemobehandling - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC: Præparater for kemobehandling**

## ValueSet: ATC: Præparater for kemobehandling (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCChemoPreparation | *Version*:2.13.0 |
| Active as of 2022-06-14 | *Computable Name*:ATCChemoPreparation |

 
ATC koder for præparater for kemobehandling 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 18 concepts

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
  "id" : "ATCChemoPreparation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCChemoPreparation",
  "version" : "2.13.0",
  "name" : "ATCChemoPreparation",
  "title" : "ATC: Præparater for kemobehandling",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "ATC koder for præparater for kemobehandling",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
        "concept" : [
          {
            "code" : "L01BC02",
            "display" : "Fluorouracil (5-FU)"
          },
          {
            "code" : "L01BC05",
            "display" : "Gemcitabine"
          },
          {
            "code" : "L01BC06",
            "display" : "Capecitabine"
          },
          {
            "code" : "L01CA04",
            "display" : "Vinorelbine"
          },
          {
            "code" : "L01CD01",
            "display" : "Paclitaxel"
          },
          {
            "code" : "L01CD02",
            "display" : "Docetaxel"
          },
          {
            "code" : "L01CE02",
            "display" : "Irinotecan"
          },
          {
            "code" : "L01DB01",
            "display" : "Doxorubicin"
          },
          {
            "code" : "L01DB03",
            "display" : "Epirubicin"
          },
          {
            "code" : "L01FD01",
            "display" : "Trastuzumab"
          },
          {
            "code" : "L01FF01",
            "display" : "Nivolumab"
          },
          {
            "code" : "L01FF02",
            "display" : "Pembrolizumab"
          },
          {
            "code" : "L01FG01",
            "display" : "Bevacizumab"
          },
          {
            "code" : "L01XA01",
            "display" : "Cisplatin"
          },
          {
            "code" : "L01XA02",
            "display" : "Carboplatin"
          },
          {
            "code" : "L01XA03",
            "display" : "Oxaliplatin"
          },
          {
            "code" : "S01LA08",
            "display" : "Bevacizumab"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
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
