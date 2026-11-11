# Funktionsgruppe [DHR] - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Funktionsgruppe [DHR]**

## ValueSet: Funktionsgruppe [DHR] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FunktionsgruppeDHR | *Version*:2.27.2 |
| Active as of 2022-07-04 | *Computable Name*:FunktionsgruppeDHR |

 
Funktionsgruppe [DHR] 

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
  "id" : "FunktionsgruppeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FunktionsgruppeDHR",
  "version" : "2.27.2",
  "name" : "FunktionsgruppeDHR",
  "title" : "Funktionsgruppe [DHR]",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Funktionsgruppe [DHR]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionGroupAlloplasty",
      "concept" : [{
        "code" : "one_hip",
        "display" : "En hofte afficeret"
      },
      {
        "code" : "both_hips",
        "display" : "Begge hofter afficerede"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden funktionshæmmende lidelse"
      }]
    }]
  }
}

```
