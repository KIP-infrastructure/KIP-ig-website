# NIHSS - 3. Test af synsfelt - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 3. Test af synsfelt**

## ValueSet: NIHSS - 3. Test af synsfelt (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS3Synsfelt | *Version*:2.14.0 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS3Synsfelt |

 
The National Institute of Health Stroke Scale (NIHSS) - 3. Test af synsfelt 

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
  "id" : "NIHSS3Synsfelt",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS3Synsfelt",
  "version" : "2.14.0",
  "name" : "NIHSS3Synsfelt",
  "title" : "NIHSS - 3. Test af synsfelt",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Test af synsfelt",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS3Visual",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```
