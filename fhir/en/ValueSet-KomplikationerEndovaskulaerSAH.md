# Komplikationer, endovaskulær [SAH] - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, endovaskulær [SAH]**

## ValueSet: Komplikationer, endovaskulær [SAH] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerEndovaskulaerSAH | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:KomplikationerEndovaskulaerSAH |

 
Komplikationer i forhold til endovaskulær [SAH] 

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
  "id" : "KomplikationerEndovaskulaerSAH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerEndovaskulaerSAH",
  "version" : "2.27.0",
  "name" : "KomplikationerEndovaskulaerSAH",
  "title" : "Komplikationer, endovaskulær [SAH]",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "Komplikationer i forhold til endovaskulær [SAH]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "dissection",
        "display" : "Dissektion"
      },
      {
        "code" : "bloodvessel/aneurysm",
        "display" : "Perforation af aneurismet eller kar"
      },
      {
        "code" : "thromboembolic",
        "display" : "Tromboemboliske komplikationer som medfører infarkt inden for 24 timer"
      },
      {
        "code" : "groinbleeding",
        "display" : "Alvorlig blødning fra lysken"
      },
      {
        "code" : "mechanical",
        "display" : "Mekaniske komplikationer"
      }]
    }]
  }
}

```
