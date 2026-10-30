# NIHSS - 7. Ekstremitets ataksi - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 7. Ekstremitets ataksi**

## ValueSet: NIHSS - 7. Ekstremitets ataksi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS7Ataksi | *Version*:2.27.1 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS7Ataksi |

 
The National Institute of Health Stroke Scale (NIHSS) - 7. Ekstremitets ataksi 

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
  "id" : "NIHSS7Ataksi",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS7Ataksi",
  "version" : "2.27.1",
  "name" : "NIHSS7Ataksi",
  "title" : "NIHSS - 7. Ekstremitets ataksi",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 7. Ekstremitets ataksi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS7LimbAtaxia",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Ingen ataksi"
      },
      {
        "code" : "1",
        "display" : "1 = Ataksi i én ekstremitet"
      },
      {
        "code" : "2",
        "display" : "2 = Ataksi i to ekstremiteter"
      }]
    }]
  }
}

```
