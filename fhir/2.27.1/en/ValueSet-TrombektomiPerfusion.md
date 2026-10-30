# Trombektomi-Perfusion (Danstroke) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trombektomi-Perfusion (Danstroke)**

## ValueSet: Trombektomi-Perfusion (Danstroke) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TrombektomiPerfusion | *Version*:2.27.1 |
| Active as of 2026-06-29 | *Computable Name*:TrombektomiPerfusion |

 
Perfusion opnået under trombektomi 

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
  "id" : "TrombektomiPerfusion",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TrombektomiPerfusion",
  "version" : "2.27.1",
  "name" : "TrombektomiPerfusion",
  "title" : "Trombektomi-Perfusion (Danstroke)",
  "status" : "active",
  "date" : "2026-06-29T00:00:00+02:00",
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
  "description" : "Perfusion opnået under trombektomi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TrombektomiPerfusion",
      "concept" : [{
        "code" : "med_reperfusion",
        "display" : "Trombektomi med efterfølgende helt eller delvist opnået reperfusion"
      },
      {
        "code" : "uden_reperfusion",
        "display" : "Trombektomi uden efterfølgende reperfusion / procedure opgivet"
      },
      {
        "code" : "spontan_reperfusion",
        "display" : "Spontan reperfusion"
      },
      {
        "code" : "hypoperfusion",
        "display" : "Stenosebetinget hypoperfusion uden trombektomi"
      }]
    }]
  }
}

```
