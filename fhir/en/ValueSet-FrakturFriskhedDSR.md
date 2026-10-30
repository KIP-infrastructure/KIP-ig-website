# Fraktur; friskhed (DSR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fraktur; friskhed (DSR)**

## ValueSet: Fraktur; friskhed (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FrakturFriskhedDSR | *Version*:2.27.1 |
| Active as of 2022-07-04 | *Computable Name*:FrakturFriskhedDSR |

 
Fraktur; friskhed (DSR) 

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
  "id" : "FrakturFriskhedDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FrakturFriskhedDSR",
  "version" : "2.27.1",
  "name" : "FrakturFriskhedDSR",
  "title" : "Fraktur; friskhed (DSR)",
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
  "description" : "Fraktur; friskhed (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "=<2",
        "display" : "Frisk ≤ 2 uger"
      },
      {
        "code" : ">2",
        "display" : "Frisk > 2 uger"
      },
      {
        "code" : ">6",
        "display" : "Pseudartrose (ældre end 6 mdr.)"
      }]
    }]
  }
}

```
