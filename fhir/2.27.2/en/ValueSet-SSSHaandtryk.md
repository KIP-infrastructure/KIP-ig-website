# Scandinavian Stroke Scale - Håndtryk - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Håndtryk**

## ValueSet: Scandinavian Stroke Scale - Håndtryk 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSHaandtryk | *Version*:2.27.2 |
| Active as of 2022-06-23 | *Computable Name*:SSSHaandtryk |

 
Scandinavian Stroke Scale - Håndtryk 

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
  "id" : "SSSHaandtryk",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSHaandtryk",
  "version" : "2.27.2",
  "name" : "SSSHaandtryk",
  "title" : "Scandinavian Stroke Scale - Håndtryk",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale - Håndtryk",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSHandshake",
      "concept" : [{
        "code" : "6",
        "display" : "6: normal kraft"
      },
      {
        "code" : "4",
        "display" : "4: nedsat kraft, men normal bevægelighed"
      },
      {
        "code" : "2",
        "display" : "2: nogen bevægelse, kan ikke knytte hånden"
      },
      {
        "code" : "0",
        "display" : "0: paralyse"
      }]
    }]
  }
}

```
