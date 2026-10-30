# NIHSS - 3. Test af synsfelt - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 3. Test af synsfelt**

## ValueSet: NIHSS - 3. Test af synsfelt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS3Synsfelt | *Version*:2.27.1 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS3Synsfelt |

 
The National Institute of Health Stroke Scale (NIHSS) - 3. Test af synsfelt 

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
  "id" : "NIHSS3Synsfelt",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS3Synsfelt",
  "version" : "2.27.1",
  "name" : "NIHSS3Synsfelt",
  "title" : "NIHSS - 3. Test af synsfelt",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Test af synsfelt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS3Visual",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Normalt synsfelt"
      },
      {
        "code" : "1",
        "display" : "1 = Partiel hemianopsi"
      },
      {
        "code" : "2",
        "display" : "2 = Komplet hemianopsi"
      },
      {
        "code" : "3",
        "display" : "3 = Bilateral blindhed (blind inkl. kortikal blindhed)"
      }]
    }]
  }
}

```
