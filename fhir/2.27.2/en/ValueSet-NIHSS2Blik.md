# NIHSS - 2. Blik - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 2. Blik**

## ValueSet: NIHSS - 2. Blik 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS2Blik | *Version*:2.27.2 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS2Blik |

 
The National Institute of Health Stroke Scale (NIHSS) - 2. Blik (kun horisontale øjenbevægelser) 

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
  "id" : "NIHSS2Blik",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS2Blik",
  "version" : "2.27.2",
  "name" : "NIHSS2Blik",
  "title" : "NIHSS - 2. Blik",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 2. Blik (kun horisontale øjenbevægelser)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS2Gaze",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Normale øjenbevægelser"
      },
      {
        "code" : "1",
        "display" : "1 = Partiel blikparese"
      },
      {
        "code" : "2",
        "display" : "2 = Total blikparese eller blikdeviation"
      }]
    }]
  }
}

```
