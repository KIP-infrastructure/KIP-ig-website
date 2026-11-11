# Vancouver klassifikation (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Vancouver klassifikation (DHR)**

## ValueSet: Vancouver klassifikation (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VancouverKlassifikationDHR | *Version*:2.27.2 |
| Active as of 2022-07-20 | *Computable Name*:VancouverKlassifikationDHR |

 
Vancouver klassifikation (DHR) 

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
  "id" : "VancouverKlassifikationDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VancouverKlassifikationDHR",
  "version" : "2.27.2",
  "name" : "VancouverKlassifikationDHR",
  "title" : "Vancouver klassifikation (DHR)",
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
  "description" : "Vancouver klassifikation (DHR)",
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
        "code" : "type_b1",
        "display" : "B1. Fraktur omkring fastsiddende stem eller lige nedenfor stem spids"
      },
      {
        "code" : "type_b2",
        "display" : "B2. Fraktur omkring løst stem eller lige nedenfor stem spids med god knoglekvalitet"
      },
      {
        "code" : "type_b3",
        "display" : "B3. Fraktur omkring løst stem eller lige nedenfor stem spids med dårlig knoglekvalitet"
      },
      {
        "code" : "type_c1",
        "display" : "C1. Fraktur klart distalt for stemmet uden osteosynteseyntese"
      },
      {
        "code" : "type_c2",
        "display" : "C2. Fraktur klart distalt for stemmet med osteosyntese"
      }]
    }]
  }
}

```
