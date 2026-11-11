# Scandinavian Stroke Scale - Facialisparese - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Facialisparese**

## ValueSet: Scandinavian Stroke Scale - Facialisparese 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSFacialisparese | *Version*:2.27.2 |
| Active as of 2022-06-23 | *Computable Name*:SSSFacialisparese |

 
Scandinavian Stroke Scale - Facialisparese 

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
  "id" : "SSSFacialisparese",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSFacialisparese",
  "version" : "2.27.2",
  "name" : "SSSFacialisparese",
  "title" : "Scandinavian Stroke Scale - Facialisparese",
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
  "description" : "Scandinavian Stroke Scale - Facialisparese",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSFacialParesis",
      "concept" : [{
        "code" : "2",
        "display" : "2: ingen eller tvivlsom"
      },
      {
        "code" : "0",
        "display" : "0: til stede"
      }]
    }]
  }
}

```
