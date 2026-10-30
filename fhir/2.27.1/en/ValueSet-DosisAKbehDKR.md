# Dosis AK behandling (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dosis AK behandling (DKR)**

## ValueSet: Dosis AK behandling (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DosisAKbehDKR | *Version*:2.27.1 |
| Active as of 2023-12-19 | *Computable Name*:DosisAKbehDKR |

 
Døgndosis AK behandling (DKR) 

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
  "id" : "DosisAKbehDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DosisAKbehDKR",
  "version" : "2.27.1",
  "name" : "DosisAKbehDKR",
  "title" : "Dosis AK behandling (DKR)",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Døgndosis AK behandling (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Dosis",
      "concept" : [{
        "code" : "le5000ie",
        "display" : "<= 5000 IE"
      },
      {
        "code" : "gt5000ie",
        "display" : "> 5000 IE"
      }]
    }]
  }
}

```
