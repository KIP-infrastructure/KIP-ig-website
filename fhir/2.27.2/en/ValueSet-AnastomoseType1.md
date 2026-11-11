# Anastomosetype 1 - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosetype 1**

## ValueSet: Anastomosetype 1 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType1 | *Version*:2.27.2 |
| Active as of 2022-10-11 | *Computable Name*:AnastomoseType1 |

 
Anastomosetype 1 

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
  "id" : "AnastomoseType1",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType1",
  "version" : "2.27.2",
  "name" : "AnastomoseType1",
  "title" : "Anastomosetype 1",
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
  "description" : "Anastomosetype 1",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisType",
      "concept" : [{
        "code" : "hand_sewn",
        "display" : "Håndsyet"
      },
      {
        "code" : "stapled",
        "display" : "Staplet anastomose"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
