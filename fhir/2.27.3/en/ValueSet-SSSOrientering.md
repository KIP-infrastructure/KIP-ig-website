# Scandinavian Stroke Scale - Orientering - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Orientering**

## ValueSet: Scandinavian Stroke Scale - Orientering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSOrientering | *Version*:2.27.3 |
| Active as of 2022-06-23 | *Computable Name*:SSSOrientering |

 
Scandinavian Stroke Scale - Orientering 

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
  "id" : "SSSOrientering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSOrientering",
  "version" : "2.27.3",
  "name" : "SSSOrientering",
  "title" : "Scandinavian Stroke Scale - Orientering",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale - Orientering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSOrientation",
      "concept" : [{
        "code" : "6",
        "display" : "6: alle"
      },
      {
        "code" : "4",
        "display" : "4: 2 ud af 3"
      },
      {
        "code" : "2",
        "display" : "2: 1 ud af 3"
      },
      {
        "code" : "0",
        "display" : "0: 0 ud af 3"
      }]
    }]
  }
}

```
