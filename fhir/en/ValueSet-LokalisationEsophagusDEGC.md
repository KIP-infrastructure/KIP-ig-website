# Lokalisation - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokalisation**

## ValueSet: Lokalisation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokalisationEsophagusDEGC | *Version*:2.27.0 |
| Active as of 2022-06-08 | *Computable Name*:LokalisationEsophagusDEGC |

 
Lokalisation af cancer i esophagus [DEGC] 

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
  "id" : "LokalisationEsophagusDEGC",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokalisationEsophagusDEGC",
  "version" : "2.27.0",
  "name" : "LokalisationEsophagusDEGC",
  "title" : "Lokalisation",
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
  "description" : "Lokalisation af cancer i esophagus [DEGC]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EsophagealLokalization",
      "concept" : [{
        "code" : "upper",
        "display" : "Øverste tredjedel"
      },
      {
        "code" : "middle",
        "display" : "Midterste tredjedel"
      },
      {
        "code" : "lower",
        "display" : "Nederste tredjedel"
      }]
    }]
  }
}

```
