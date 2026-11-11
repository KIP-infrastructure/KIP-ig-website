# NIHSS - 1a. Bevidsthedsniveau - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 1a. Bevidsthedsniveau**

## ValueSet: NIHSS - 1a. Bevidsthedsniveau 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS1aBevidsthedsniveau | *Version*:2.27.3 |
| Active as of 2022-06-24 | *Computable Name*:NIHSS1aBevidsthedsniveau |

 
The National Institute of Health Stroke Scale (NIHSS) - 1a. Bevidsthedsniveau 

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
  "id" : "NIHSS1aBevidsthedsniveau",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS1aBevidsthedsniveau",
  "version" : "2.27.3",
  "name" : "NIHSS1aBevidsthedsniveau",
  "title" : "NIHSS - 1a. Bevidsthedsniveau",
  "status" : "active",
  "date" : "2022-06-24T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1a. Bevidsthedsniveau",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS1aLOC",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Helt vågen, reagerer naturligt"
      },
      {
        "code" : "1",
        "display" : "1 = Ikke vågen, men responderer ved mindre stimuli"
      },
      {
        "code" : "2",
        "display" : "2 = Ikke vågen, kan kun vækkes ved gentagne eller kraftige stimuli"
      },
      {
        "code" : "3",
        "display" : "3 = Koma"
      }]
    }]
  }
}

```
