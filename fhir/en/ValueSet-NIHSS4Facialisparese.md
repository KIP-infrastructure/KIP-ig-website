# NIHSS - 4. Facialisparese - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 4. Facialisparese**

## ValueSet: NIHSS - 4. Facialisparese 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS4Facialisparese | *Version*:2.27.3 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS4Facialisparese |

 
The National Institute of Health Stroke Scale (NIHSS) - 4. Facialisparese (bed patienten om at vise tænder/løfte øjenbryn og lukke øjnene fast i) 

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
  "id" : "NIHSS4Facialisparese",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS4Facialisparese",
  "version" : "2.27.3",
  "name" : "NIHSS4Facialisparese",
  "title" : "NIHSS - 4. Facialisparese",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facialisparese (bed patienten om at vise tænder/løfte øjenbryn og lukke øjnene fast i)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS4FacialPalsy",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Normale, symmetriske ansigtsbevægelser"
      },
      {
        "code" : "1",
        "display" : "1 = Let parese (udglattet nasolabialfure eller asymmetri ved smil)"
      },
      {
        "code" : "2",
        "display" : "2 = Partiel parese (svær eller total parese af nedre ansigtshalvdel)"
      },
      {
        "code" : "3",
        "display" : "3 = Total paralyse af én eller begge sider"
      }]
    }]
  }
}

```
