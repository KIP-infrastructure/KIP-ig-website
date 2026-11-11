# Knoglegraft (DSR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knoglegraft (DSR)**

## ValueSet: Knoglegraft (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KnoglegraftDSR | *Version*:2.27.3 |
| Active as of 2022-10-06 | *Computable Name*:KnoglegraftDSR |

 
Knoglegraft (DSR) 

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
  "id" : "KnoglegraftDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KnoglegraftDSR",
  "version" : "2.27.3",
  "name" : "KnoglegraftDSR",
  "title" : "Knoglegraft (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Knoglegraft (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Intet"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "spongiotic",
        "display" : "Spongiøst"
      },
      {
        "code" : "structural",
        "display" : "Strukturel"
      }]
    }]
  }
}

```
