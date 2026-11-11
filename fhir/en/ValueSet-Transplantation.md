# Transplantation - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantation**

## ValueSet: Transplantation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Transplantation | *Version*:2.27.2 |
| Active as of 2022-07-13 | *Computable Name*:Transplantation |

 
Er en Transplantation udført 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "Transplantation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Transplantation",
  "version" : "2.27.2",
  "name" : "Transplantation",
  "title" : "Transplantation",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Er en Transplantation udført",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "BOQF0",
        "display" : "Autolog"
      },
      {
        "code" : "BOQF1",
        "display" : "Konventionel Allogen"
      },
      {
        "code" : "BOQF2",
        "display" : "Mini-Allogen"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen transplantation"
      }]
    }]
  }
}

```
