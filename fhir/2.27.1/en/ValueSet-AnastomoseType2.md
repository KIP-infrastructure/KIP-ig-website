# Anastomosetype 2 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosetype 2**

## ValueSet: Anastomosetype 2 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType2 | *Version*:2.27.1 |
| Active as of 2022-10-11 | *Computable Name*:AnastomoseType2 |

 
Anastomosetype 2 

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
  "id" : "AnastomoseType2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType2",
  "version" : "2.27.1",
  "name" : "AnastomoseType2",
  "title" : "Anastomosetype 2",
  "status" : "active",
  "date" : "2022-10-11T00:00:00+02:00",
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
  "description" : "Anastomosetype 2",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisType",
      "concept" : [{
        "code" : "intracorporeal",
        "display" : "Intrakorporalt"
      },
      {
        "code" : "extracorporeal",
        "display" : "Ekstrakorporalt"
      }]
    }]
  }
}

```
