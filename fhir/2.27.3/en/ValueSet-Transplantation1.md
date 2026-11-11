# Transplantation uden svarmuligheden Ingen transplantation - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantation uden svarmuligheden Ingen transplantation**

## ValueSet: Transplantation uden svarmuligheden Ingen transplantation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Transplantation1 | *Version*:2.27.3 |
| Active as of 2022-09-26 | *Computable Name*:Transplantation1 |

 
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
  "id" : "Transplantation1",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Transplantation1",
  "version" : "2.27.3",
  "name" : "Transplantation1",
  "title" : "Transplantation uden svarmuligheden Ingen transplantation",
  "status" : "active",
  "date" : "2022-09-26T00:00:00+02:00",
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
    }]
  }
}

```
