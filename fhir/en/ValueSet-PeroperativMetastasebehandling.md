# Peroperativ metastasebehandling - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Peroperativ metastasebehandling**

## ValueSet: Peroperativ metastasebehandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PeroperativMetastasebehandling | *Version*:2.27.2 |
| Active as of 2022-10-13 | *Computable Name*:PeroperativMetastasebehandling |

 
Peroperativ metastasebehandling 

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
  "id" : "PeroperativMetastasebehandling",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PeroperativMetastasebehandling",
  "version" : "2.27.2",
  "name" : "PeroperativMetastasebehandling",
  "title" : "Peroperativ metastasebehandling",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Peroperativ metastasebehandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "extensive_excision",
        "display" : "Ekstensiv excision af peritoneum og HIPEC"
      },
      {
        "code" : "rfa",
        "display" : "RFA af hepar"
      },
      {
        "code" : "metasis_resection",
        "display" : "Levermetastaseresektion"
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
