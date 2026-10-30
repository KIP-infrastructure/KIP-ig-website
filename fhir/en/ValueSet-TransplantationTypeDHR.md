# Transplantation type (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantation type (DHR)**

## ValueSet: Transplantation type (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TransplantationTypeDHR | *Version*:2.27.1 |
| Active as of 2022-11-07 | *Computable Name*:TransplantationTypeDHR |

 
Transplantation type (DHR) 

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
  "id" : "TransplantationTypeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TransplantationTypeDHR",
  "version" : "2.27.1",
  "name" : "TransplantationTypeDHR",
  "title" : "Transplantation type (DHR)",
  "status" : "active",
  "date" : "2022-11-07T00:00:00+02:00",
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
  "description" : "Transplantation type (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "BOQF0",
        "display" : "Autolog"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "heterologous",
        "display" : "Heterolog"
      },
      {
        "code" : "combined",
        "display" : "Kombination"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
