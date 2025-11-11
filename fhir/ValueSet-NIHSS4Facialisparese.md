# NIHSS - 4. Facialisparese - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 4. Facialisparese**

## ValueSet: NIHSS - 4. Facialisparese (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS4Facialisparese | *Version*:2.13.0 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS4Facialisparese |

 
The National Institute of Health Stroke Scale (NIHSS) - 4. Facialisparese (bed patienten om at vise tænder/løfte øjenbryn og lukke øjnene fast i) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "NIHSS4Facialisparese",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS4Facialisparese",
  "version" : "2.13.0",
  "name" : "NIHSS4Facialisparese",
  "title" : "NIHSS - 4. Facialisparese",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-27T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facialisparese (bed patienten om at vise tænder/løfte øjenbryn og lukke øjnene fast i)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS4FacialPalsy",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```
