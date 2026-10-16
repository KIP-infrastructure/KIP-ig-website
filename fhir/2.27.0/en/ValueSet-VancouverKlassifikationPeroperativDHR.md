# Vancouver klassifikation - Peroperativ (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Vancouver klassifikation - Peroperativ (DHR)**

## ValueSet: Vancouver klassifikation - Peroperativ (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VancouverKlassifikationPeroperativDHR | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:VancouverKlassifikationPeroperativDHR |

 
Vancouver klassifikation - Peroperativ (DHR) 

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
  "id" : "VancouverKlassifikationPeroperativDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VancouverKlassifikationPeroperativDHR",
  "version" : "2.27.0",
  "name" : "VancouverKlassifikationPeroperativDHR",
  "title" : "Vancouver klassifikation - Peroperativ (DHR)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Vancouver klassifikation - Peroperativ (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/VancouverClassification",
      "concept" : [{
        "code" : "type_ag",
        "display" : "A1. Fraktur svarende til trochanter major"
      },
      {
        "code" : "type_al",
        "display" : "A2. Fraktur svarende til trochanter minor"
      },
      {
        "code" : "type_b",
        "display" : "B. Fraktur omkring stem evt. gående nedenfor stem spids"
      },
      {
        "code" : "type_c",
        "display" : "C. Fraktur klart distalt for stemmet"
      }]
    }]
  }
}

```
